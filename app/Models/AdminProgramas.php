<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminProgramas extends Model
{
    protected $table = 'admin_programas';

    protected $fillable = [
        'modl_id',
        'prog_nomb',
        'prog_tipo',
        'prog_icono',
        'prog_icosp',
        'prog_border',
        'prog_form',
        'prog_namejs',
        'prog_manager',
        'prog_panel',
        'prog_modal',
        'prog_orden',
        'prog_ident_web',
        'prog_lobiPanel',
        'prog_table_sctroll'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function AdminModulo()
    {
        return $this->belongsTo(AdminModulos::class, 'modl_id', 'modl_id');
    }

    public function AdminAccesos()
    {
        return $this->belongsToMany(Perfiles::class, 'admin_accesos', 'prog_id', 'perf_id');
    }
}
