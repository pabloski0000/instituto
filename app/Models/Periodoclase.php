<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodoclase extends Model
{
    use HasFactory;

    protected $fillable = [
        'periodo_id',
        'materiaimpartida_id',
        'aula_id'
    ];
}
