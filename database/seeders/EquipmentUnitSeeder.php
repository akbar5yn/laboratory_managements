<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipmentUnits = [
            [
                // 'slug' => 'NEA',
                'no_unit' => 'NEA1',
                'status' => 'Dipinjam',
                'kondisi' => 'Normal',
                'equipment_category_id' => '1'
            ],
            [
                // 'slug' => 'NEA',
                'no_unit' => 'NEA2',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                'equipment_category_id' => '1'
            ],
            [
                // 'slug' => 'NEA',
                'no_unit' => 'NEA3',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                'equipment_category_id' => '1'
            ],
            [
                // 'slug' => 'NEA',
                'no_unit' => 'NEA4',
                'status' => 'Rusak',
                'kondisi' => 'Rusak',
                'equipment_category_id' => '1'
            ],
            [
                // 'slug' => 'KIT',
                'no_unit' => 'KIT1',
                'status' => 'Dipinjam',
                'kondisi' => 'Normal',
                'equipment_category_id' => '2'
            ],
            [
                // 'slug' => 'KIT',
                'no_unit' => 'KIT2',
                'status' => 'Rusak',
                'kondisi' => 'Rusak',
                'equipment_category_id' => '2'
            ],
            [
                // 'slug' => 'KIT',
                'no_unit' => 'KIT3',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                'equipment_category_id' => '2'
            ],
            [
                // 'slug' => 'MUR',
                'no_unit' => 'MUR1',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                'equipment_category_id' => '3'
            ],
            [
                // 'slug' => 'MUR',
                'no_unit' => 'MUR2',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                'equipment_category_id' => '3'
            ],
            [
                // 'slug' => 'CAU',
                'no_unit' => 'CAU1',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                'equipment_category_id' => '4'
            ],
            [
                // 'slug' => 'AUO',
                'no_unit' => 'AUO1',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                'equipment_category_id' => '5'
            ],
        ];
        DB::table('equipment_units')->insert($equipmentUnits);
    }
}
