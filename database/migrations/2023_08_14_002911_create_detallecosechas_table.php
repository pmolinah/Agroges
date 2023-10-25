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
        Schema::create('detallecosechas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('planificacioncosecha_id')->unsigned();
            $table->foreign('planificacioncosecha_id')->references('id')->on('planificacioncosechas');
            $table->bigInteger('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->string('tarjaenvase')->nullable();
            $table->float('kilos')->unsigned();
            $table->bigInteger('exportadora_id')->unsigned();
            $table->foreign('exportadora_id')->references('id')->on('empresas');
            $table->string('pivote');
                       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallecosechas');
    }
};
