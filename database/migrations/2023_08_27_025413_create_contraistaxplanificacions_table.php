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
        Schema::create('contraistaxplanificacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('planificacion_id')->unsigned();
            $table->foreign('planificacion_id')->references('id')->on('planificacioncosechas');
            $table->bigInteger('contratista_id')->unsigned();
            $table->foreign('contratista_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contraistaxplanificacions');
    }
};