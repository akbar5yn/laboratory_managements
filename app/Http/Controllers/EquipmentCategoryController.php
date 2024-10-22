<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\EquipmentCategory;
use Illuminate\Support\Facades\Log;

class EquipmentCategoryController extends Controller
{
    public function index()
    {
        // Mengambil semua kategori peralatan
        $categories = EquipmentCategory::with('units')->get();

        return view('admin.inventaris-alat', [
            'title' => 'Kelola Alat & Barang',
            'tools' => $categories
        ]);
    }

    public function handleRequest(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_alat' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tahun_pengadaan' => 'required|integer',
            'fungsi' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
        ]);

        try {
            // Simpan data kategori dan unit
            $category = EquipmentCategory::createNewEquipmentCategory($validated);

            return redirect()->route('equipment.category')->with('success', 'Kategori dan Unit berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Error saat menambahkan kategori dan unit: ' . $e->getMessage());
            return redirect()->route('equipment.category')->with('error', 'Terjadi kesalahan saat menambahkan kategori dan unit.');
        }
    }

    public function handleUpdate(Request $request, $id)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tahun_pengadaan' => 'required|integer',
            'fungsi' => 'required|string|max:255',
        ]);

        try {
            $tool = EquipmentCategory::findOrFail($id);

            $tool->updateEquipment($request->all());

            return redirect()->route('equipment.category')->with('success', 'Alat berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('equipment.category')->with('error', 'Alat tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->route('equipment.category')->with('error', 'Terjadi kesalahan saat memperbarui alat: ' . $e->getMessage());
        }
    }
}
