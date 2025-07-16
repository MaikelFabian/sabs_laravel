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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('idpersona');
            $table->unsignedBigInteger('identificacion')->unique();
            $table->text('nombre');
            $table->text('apellido');
            $table->text('telefono')->nullable();
            $table->text('correo');
            $table->text('contrasena');
            $table->integer('edad');
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fecha_creacion')->nullable()->useCurrent();
            $table->timestamp('fecha_actualizacion')->nullable();
            $table->unsignedBigInteger('ficha')->nullable();;
            $table->foreign('ficha')->references('idficha')->on('fichas')->onDelete('cascade');
            $table->unsignedBigInteger('rol')->nullable();
            $table->foreign('rol')->references('idrol')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};