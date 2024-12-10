<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminAccesos extends Model
{
    protected $table = 'admin_accesos';

    protected $fillable = [
        'perf_id',
        'prog_id',
        'acce_esado'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
