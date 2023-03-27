<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    use HasFactory;

    public function voluntarios()
    {
        return $this->belongsToMany(Monitores::class, 'ruta_voluntarios', 'ruta_id', 'voluntario_id');
    }
}
