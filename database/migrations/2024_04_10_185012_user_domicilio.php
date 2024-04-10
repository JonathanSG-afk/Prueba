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
        Schema::create('users_domicilio', function (Blueprint $table) {
            $table->id();
            $table->integer('idUser');
            $table->string('domicilio');
            $table->integer('numero_exterior')->nullable();
            $table->integer('numero_interior')->nullable();
            $table->integer('colonia')->nullable();
            $table->integer('cp')->nullable();
            $table->string('ciudad');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
