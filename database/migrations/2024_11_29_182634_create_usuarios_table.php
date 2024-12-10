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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('usua_id');
            $table->string('usua_usuario',16);
            $table->string('usua_clave',16);
            $table->string('usua_nomb',75);
            $table->string('usua_email',75);
            $table->string('usua_foto',75)->nullable();
            $table->unsignedBigInteger('perf_id');
            $table->unsignedBigInteger('vend_id')->nullable();
            $table->string('usua_serie',3)->nullable();
            $table->tinyInteger('usua_estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
