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
        Schema::create('rol_permiso_opcion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('idrol')->on('roles')->onDelete('cascade');
            $table->unsignedBigInteger('id_permiso');
            $table->foreign('id_permiso')->references('idpermiso')->on('permisos')->onDelete('cascade');
            $table->unsignedBigInteger('id_opcion');
            $table->foreign('id_opcion')->references('id')->on('opciones')->onDelete('cascade'); // Cambiado de 'idopcion' a 'id'
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
        Schema::dropIfExists('rol_permiso_opcion');
    }
};
