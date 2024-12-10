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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('empr_id');
            $table->string('empr_social',75);
            $table->string('empr_nomb',75);
            $table->string('empr_abrev',4)->nullable()->default(null);
            $table->string('empr_grupo',20)->nullable()->default(null);
            $table->integer('empr_horavalidate')->nullable()->default(null);
            $table->string('empr_sede',2)->nullable()->default('SI');
            $table->string('empr_ruc',11)->nullable()->default(null);
            $table->string('empr_telf',100)->nullable()->default(null);
            $table->string('empr_tipo',1)->nullable()->default('');
            $table->string('empr_direcc',255)->nullable()->default(null);
            $table->unsignedBigInteger('empr_ubic')->nullable()->default(0);
            $table->bigInteger('clie_id')->nullable()->default(null);
            $table->string('dirs_id',2)->nullable()->default(null);
            $table->string('dirf_id',2)->nullable()->default(null);
            $table->date('empr_fecinvIns')->nullable()->default(null);
            $table->date('empr_fecinvTel')->nullable()->default(null);
            $table->date('empr_fecinvPt')->nullable()->default(null);
            $table->string('empr_seriedoc',3)->nullable()->default(null);
            $table->decimal('empr_dsto1',12,3)->nullable()->default(null);
            $table->decimal('empr_dsto2',12,3)->nullable()->default(null);
            $table->string('empr_seriemaq',20)->nullable()->default(null);
            $table->string('zone_id',3)->nullable()->default(null);
            $table->char('empr_autnro',20)->nullable()->default(null);
            $table->date('empr_autfecha')->nullable()->default(null);
            $table->char('empr_corrdesde',7)->nullable()->default(null);
            $table->char('empr_corrhasta',7)->nullable()->default(null);
            $table->char('empr_FactElect',1)->default('9');
            $table->tinyInteger('empr_estado')->nullable()->default(1);
            $table->string('empr_claveSol',50)->nullable()->default(null);
            $table->string('empr_claveUsuario',50)->nullable()->default(null);
            $table->string('empr_claveCert',50)->nullable()->default(null);
            $table->string('empr_logoFac',100)->nullable()->default(null);
            $table->string('empr_certificado',100)->nullable()->default(null);
            $table->string('empr_correo',100)->nullable()->default(null);
            $table->string('empr_email_xml',3)->nullable()->default(null);
            $table->string('empr_email_pdf',3)->nullable()->default(null);
            $table->char('empr_betasunat',1)->nullable()->default('3');
            $table->string('empr_colrfact',100)->nullable()->default('137,217,245');
            $table->string('empr_colrbol',100)->nullable()->default('137,217,245');
            $table->string('empr_colrncr',100)->nullable()->default('137,217,245');
            $table->string('empr_colrndb',100)->nullable()->default('137,217,245');
            $table->string('empr_colrgre',100)->nullable()->default('137,217,245');
            $table->string('empr_ctabanca1',250)->nullable()->default(null);
            $table->string('empr_ctabanca2',250)->nullable()->default(null);
            $table->string('empr_ctabanca3',250)->nullable()->default(null);
            $table->string('empr_correouser',250)->nullable()->default(null);
            $table->string('empr_passuser',250)->nullable()->default(null);
            $table->string('empr_user',50)->nullable()->default(null);
            $table->string('empr_api_sunat',50)->nullable()->default(null);
            $table->string('empr_api_clave_sunat',50)->nullable()->default(null);
            $table->string('empr_api_token_sunat',50)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('empr_ubic')->references('depa_id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
