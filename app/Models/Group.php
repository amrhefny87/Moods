<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'impostor_id'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
