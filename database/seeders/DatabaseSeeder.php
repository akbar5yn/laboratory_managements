<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            EquipmentCategorySeeder::class,
            EquipmentUnitSeeder::class,
            Room::class,
            // Tambahkan seeder lainnya jika ada
        ]);
    }
}
