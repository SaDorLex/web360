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
        Schema::create('admin_programas', function (Blueprint $table) {
            $table->id('prog_id');
            $table->unsignedBigInteger('modl_id')->nullable();
            $table->string('prog_nomb',75);
            $table->string('prog_tipo',1)->nullable()->default('F');
            $table->string('prog_icono',20);
            $table->string('prog_icosp',100)->nullable();
            $table->string('prog_border',50)->nullable();
            $table->string('prog_form',45)->nullable();
            $table->string('prog_namejs',45)->nullable();
            $table->string('prog_manager',30)->nullable();
            $table->string('prog_panel',50)->default('cargarformulariov2')->nullable();
            $table->tinyInteger('prog_modal')->default(0);
            $table->tinyInteger('prog_orden')->default(0);
            $table->tinyInteger('prog_ident_web')->default(1);
            $table->text('prog_lobiPanel')->nullable();
            $table->text('prog_table_scroll')->nullable();
            $table->timestamps();

            $table->foreign('modl_id')->references('modl_id')->on('admin_modulos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_programas');
    }
};
