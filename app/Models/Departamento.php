<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "departamentos";

    protected $primaryKey = "depa_id";

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [
        'depa_nomb',
    ];

    public function Empresas()
    {
        return $this->hasMany(Empresas::class, 'empr_ubic', 'depa_id');
    }
}
