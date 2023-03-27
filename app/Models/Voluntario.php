<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rutas()
    {
        return $this->belongsToMany(Rutas::class, 'ruta_voluntarios', 'voluntario_id', 'ruta_id');
    }
}
