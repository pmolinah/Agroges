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
            $table->bigInteger('cosecha_id')->unsigned();
            $table->foreign('cosecha_id')->references('id')->on('cosechas');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->float('kilos')->unsigned();
            
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
