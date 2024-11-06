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
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama spot destinasi
            $table->text('description')->nullable(); // Deskripsi spot destinasi
            $table->string('photo')->nullable(); // Foto spot destinasi
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); // Kategori destinasi
            $table->softDeletes(); // Soft delete jika diperlukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spots');
    }
};
