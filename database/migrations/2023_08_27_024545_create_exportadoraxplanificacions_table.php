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
        Schema::create('exportadoraxplanificacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('planificacion_id')->unsigned();
            $table->foreign('planificacion_id')->references('id')->on('planificacioncosechas');
            $table->float('kilosSolicitados')->unsigned();
            $table->float('KilosRecolectador')->unsigned();
            $table->string('observacion',250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exportadoraxplanificacions');
    }
};
