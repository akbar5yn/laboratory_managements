<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EquipmentCategory extends Model
{
    protected $table = 'equipment_categories';
    // protected $fillable = ['nama_alat', 'lokasi', 'tahun_pengadaan', 'fungsi'];

    public function units(): HasMany
    {
        return $this->hasMany(EquipmentUnit::class, 'equipment_category_id');
    }
}
