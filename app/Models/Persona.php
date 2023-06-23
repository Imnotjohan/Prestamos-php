<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre','telefono','edad','ecivil','correo'];
    // use HasFactory;

    public function fiador()
    {
        return $this->hasOne(Fiador::class,"id");
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class,"persona_id");
    }
}
