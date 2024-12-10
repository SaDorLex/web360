<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'usua_usuario',
        'usua_clave',
        'usua_nomb',
        'usua_email',
        'usua_foto',
        'perf_id',
        'vend_id',
        'usua_serie',
        'usua_estado',
    ];

    protected $casts = [
        'created_at' => 'datetime', 
        'updated_at' => 'datetime'
    ];

    public function Perfiles()
    {
        return $this->belongsTo(Perfiles::class, 'perf_id', 'perf_id');
    }
}
