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
        Schema::create('tipomovimientos', function (Blueprint $table) {
            $table->id('idtipomovimiento');
            $table->text('tipomovimiento');
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fecha_creacion')->nullable()->useCurrent();
            $table->timestamp('fecha_actualizacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipomovimientos');
    }
};
