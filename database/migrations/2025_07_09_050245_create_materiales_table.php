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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id('idmaterial');
            $table->text('nombrematerial');
            $table->text('descripcion');
            $table->integer('stock');
            $table->boolean('caduca');
            $table->timestamp('fecha_vencimiento')->nullable();
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fecha_creacion')->nullable()->useCurrent();
            $table->timestamp('fecha_actualizacion')->nullable();
            $table->unsignedBigInteger('categoriamaterial');
            $table->foreign('categoriamaterial')->references('idcategoria_material')->on('categorias_materiales')->onDelete('cascade');
            $table->unsignedBigInteger('tipomaterial');
            $table->foreign('tipomaterial')->references('idtipo_material')->on('tipos_materiales')->onDelete('cascade');
            $table->unsignedBigInteger('unidadmedida');
            $table->foreign('unidadmedida')->references('idunidadmedida')->on('unidadmedidas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
