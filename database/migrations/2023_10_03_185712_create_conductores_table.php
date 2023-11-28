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
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('ap_paterno', 30);
            $table->string('ap_materno', 30);
            $table->string('id_licencia', 12);
            $table->string('edad', 4);
            $table->string('telefono', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conductores');
    }
};
