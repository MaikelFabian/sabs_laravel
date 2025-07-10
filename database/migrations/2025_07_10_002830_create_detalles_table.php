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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id('iddetalle');
            $table->integer('cantidasolicitada');
            $table->text('descripcion')->nullable();
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fecha_creacion')->nullable()->useCurrent();
            $table->timestamp('fecha_actualizacion')->nullable();
            $table->unsignedBigInteger('material');
            $table->foreign('material')->references('idmaterial')->on('materiales')->onDelete('cascade');
            $table->unsignedBigInteger('personaaprueba');
            $table->foreign('personaaprueba')->references('idpersona')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('personaencargada');
            $table->foreign('personaencargada')->references('idpersona')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('personasolicita');
            $table->foreign('personasolicita')->references('idpersona')->on('personas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
