<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $table = 'perfiles';

    protected $primaryKey = 'perf_id';

    protected $fillable = [
        'perf_nomb',
        'perf_estado',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function AdminAccesos()
    {
        return $this->belongsToMany(AdminProgramas::class, 'admin_accesos', 'perf_id', 'prog_id');
    }

    public function Usuarios()
    {
        return $this->hasMany(Usuarios::class, 'perf_id', 'perf_id');
    }
}
