<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;
    protected $fillable = [
        "titulo",
        "descripcion",
        "id_usuario",
    ];
}
