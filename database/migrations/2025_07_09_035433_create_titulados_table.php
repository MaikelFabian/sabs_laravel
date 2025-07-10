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
        Schema::create('titulados', function (Blueprint $table) {
            $table->id('idtitulado');
            $table->text('titulado');
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fechacreacion')->nullable()->useCurrent();
            $table->timestamp('fechaactualización')->nullable();
            $table->unsignedBigInteger('area');
            $table->foreign('area')->references('idarea')->on('areas')->onDelete('cascade');
            $table->unsignedBigInteger('ficha');
            $table->foreign('ficha')->references('idficha')->on('fichas')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titulados');
    }
};