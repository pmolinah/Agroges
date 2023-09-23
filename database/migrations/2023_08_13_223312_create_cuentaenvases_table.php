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
        Schema::create('cuentaenvases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->bigInteger('envase_id')->unsigned();
            $table->foreign('envase_id')->references('id')->on('envases');
            $table->integer('saldo')->unsigned();
            $table->string('observacion',100)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentaenvases');
    }
};
