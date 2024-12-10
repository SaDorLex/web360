<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModulos extends Model
{
    protected $table = 'admin_modulos';

    protected $fillable = [
        'modl_nombre',
        'modl_icon',
        'modl_orden',
        'modl_estado'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function AdminProgramas()
    {
        return $this->hasMany(AdminProgramas::class, 'modl_id', 'modl_id');
    }
}
