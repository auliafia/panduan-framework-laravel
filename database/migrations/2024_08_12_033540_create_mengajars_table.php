<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_mengajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosens');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliahs');
            $table->string('kelas');
            $table->string('jam_mengajar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mengajars');
    }
};
