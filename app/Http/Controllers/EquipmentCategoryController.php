<?php

namespace App\Http\Controllers;

use App\Models\EquipmentCategory;
use Illuminate\Http\Request;

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
}
