<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potencial extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
    ];
}
