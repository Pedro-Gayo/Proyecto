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
        Schema::create('rutas_voluntarios', function (Blueprint $table) {
            $table->unsignedBigInteger('ruta_id');
            $table->unsignedBigInteger('voluntario_id');
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade');
            $table->foreign('voluntario_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['ruta_id', 'voluntario_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutas_voluntarios');
    }
};
