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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',250);
            $table->string('rut',10);
            $table->string('razon_social',250);
            $table->string('direccion',250);
            $table->string('comuna',250);
            $table->string('email',250)->nullable();
            $table->string('telefono',50)->nullable();
            $table->integer('tipo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
