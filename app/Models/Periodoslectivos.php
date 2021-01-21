<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodoslectivos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'dia',
        'hora_inicio',
        'hora_fin',
        'anyoescolar'
        
    ];
}
