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
        Schema::create('admin_accesos', function (Blueprint $table) {
            $table->unsignedBigInteger('perf_id');
            $table->unsignedBigInteger('prog_id');

            $table->tinyInteger('acce_estado')->default(1);

            $table->primary(['perf_id', 'prog_id']);

            $table->foreign('perf_id')->references('perf_id')->on('perfiles')->onDelete('cascade');
            $table->foreign('prog_id')->references('prog_id')->on('admin_programas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_accesos');
    }
};
