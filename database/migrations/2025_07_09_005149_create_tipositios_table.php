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
        Schema::create('tipositios', function (Blueprint $table) {
            $table->id('idtipositio');
            $table->text('tipositio');
            $table->boolean('activo')->nullable()->default(true);
            $table->timestamp('fechacreacion')->nullable()->useCurrent();
            $table->timestamp('fechaactualización')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipositios');
    }
};
