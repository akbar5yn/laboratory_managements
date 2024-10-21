<?php

namespace App\Http\Controllers;

use App\Models\EquipmentCategory;
use Illuminate\Http\Request;

class EquipmentUnitController extends Controller
{
    public function show($name)
    {
        $category = EquipmentCategory::with('units')->where('nama_alat', $name)->firstOrFail();

        $units = $category->units;

        return view('admin.detail-alat', [
            'title' => 'Detail Unit Alat',
            'subtitle' => 'Detail Alat',
            'units' => $units
        ]);
    }
}
