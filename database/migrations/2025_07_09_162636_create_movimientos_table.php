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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id('idmovimiento');
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fecha_creacion')->nullable()->useCurrent();
            $table->timestamp('fecha_actualizacion')->nullable();
            $table->unsignedBigInteger('movimientopersona');
            $table->foreign('movimientopersona')->references('idpersona')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('tipomovimiento');
            $table->foreign('tipomovimiento')->references('idtipomovimiento')->on('tipomovimientos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
