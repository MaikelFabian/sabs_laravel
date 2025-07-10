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
        Schema::create('areacentros', function (Blueprint $table) {
            $table->id('idareacentro');
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fechacreacion')->nullable()->useCurrent();
            $table->timestamp('fechaactualización')->nullable();
            $table->unsignedBigInteger('area');
            $table->foreign('area')->references('idarea')->on('areas')->onDelete('cascade');
            $table->unsignedBigInteger('centro');
            $table->foreign('centro')->references('idcentro')->on('centros')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areacentros');
    }
};
