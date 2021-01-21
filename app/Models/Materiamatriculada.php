<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiamatriculada extends Model
{
    //use HasFactory;
    protected $table ="materiasmatriculadas";
    protected $fillable = [
        'alumno',
        'materia',
        'grupo'
    ];
}
