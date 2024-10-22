<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipmentCategories = [
            [
                'slug' => 'NEA',
                'nama_alat' => 'Neraca 800 series',
                'lokasi' => 'Lab Fisika Dasar',
                'tahun_pengadaan' => '2016',
                'fungsi' => 'Menimbang sampel ',
                'jumlah' => '4'
            ],
            [
                'slug' => 'KIT',
                'nama_alat' => 'Kit Praktikum Elektronika Dasar ',
                'lokasi' => 'Lab Elektronika dan Instrumentasi',
                'tahun_pengadaan' => '2016',
                'fungsi' => 'Praktikum elektronika dasar ',
                'jumlah' => '3'
            ],

            [
                'slug' => 'MUR',
                'nama_alat' => 'Multimeter Digital',
                'lokasi' => 'Lab Fisika Modern',
                'tahun_pengadaan' => '2016',
                'fungsi' => ' Mengukur Arus dan Tegangan',
                'jumlah' => '2'
            ],

            [
                'slug' => 'CAU',
                'nama_alat' => 'Catu Daya',
                'lokasi' => 'Lab Fisika Modern',
                'tahun_pengadaan' => '2016',
                'fungsi' => 'Mengalirkan tegangan dengan mengubah tegangan AC ke DC ',
                'jumlah' => '1'
            ],
            [
                'slug' => 'AUO',
                'nama_alat' => 'Audio Frequency Generator GW/GRG-450B',
                'lokasi' => 'Lab Elektronika dan Instrumentasi ',
                'tahun_pengadaan' => '2016',
                'fungsi' => 'Untuk menghasilkan sinyal pada frekuensi tertentu ',
                'jumlah' => '1'
            ],
        ];
        DB::table('equipment_categories')->insert($equipmentCategories);
    }
}
