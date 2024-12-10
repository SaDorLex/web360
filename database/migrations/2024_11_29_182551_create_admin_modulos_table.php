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
        Schema::create('admin_modulos', function (Blueprint $table) {
            $table->id('modl_id');
            $table->string('modl_nombre',20);
            $table->string('modl_icon',20);
            $table->tinyInteger('modl_orden');
            $table->tinyInteger('modl_estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_modulos');
    }
};
