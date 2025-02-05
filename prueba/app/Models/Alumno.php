<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumno extends Model
{
    public $timestamps = false;

    public function equipo(): BelongsTo{
        return $this->belongsTo(Equipo::class);
    }
}
