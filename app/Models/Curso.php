<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Curso
{
    use HasFactory, Notifiable;

    protected $table = 'usuario';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'valor',
    ];

    protected $hidden = [];

    protected $casts = [];
}
