<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'empresas';

    protected $primaryKey = 'empr_id';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [
        'empr_id',
        'empr_social',
        'empr_nomb',
        'empr_abrev',
        'empr_ruc',
        'empr_tipo',
        'empr_ubic',
        'empr_direcc',
        'empr_telf',
        'empr_seriedoc',
        'empr_grupo',
        'empr_sede',
        'empr_fecinvIns',
        'empr_correouser',
        'empr_passuser',
        'empr_ctabanca1',
        'empr_ctabanca2',
        'empr_ctabanca3',
    ];

    public function Departamento()
    {
        return $this->belongsTo(Departamento::class, 'empr_ubic', 'depa_id');
    }
}
