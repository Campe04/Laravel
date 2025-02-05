<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function alumnos(): HasMany
    {
        return $this->hasMany(Alumno::class);
    }
}
