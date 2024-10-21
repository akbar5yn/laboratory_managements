<?php

use App\Models\EquipmentCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipment_units', function (Blueprint $table) {
            $table->id();
            $table->string('no_unit')->unique();
            $table->enum('status', ['Tersedia', 'Dipinjam', 'Rusak'])->default('Tersedia');
            $table->enum('kondisi', ['Normal', 'Rusak'])->default('Normal');
            $table->foreignId('equipment_category_id')->constrained(
                table: 'equipment_categories',
                indexName: 'equipment_categories_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_units');
    }
};
