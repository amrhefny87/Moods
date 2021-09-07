<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_equipo',
        'impostor_id',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
