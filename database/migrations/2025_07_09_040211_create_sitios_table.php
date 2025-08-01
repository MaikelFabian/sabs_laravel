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
        Schema::create('sitios', function (Blueprint $table) {
            $table->id('idsitio');
            $table->text('sitio');
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fechacreacion')->nullable()->useCurrent();
            $table->timestamp('fechaactualización')->nullable();
            $table->unsignedBigInteger('tipositio');
            $table->foreign('tipositio')->references('idtipositio')->on('tipositios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitios');
    }
};
