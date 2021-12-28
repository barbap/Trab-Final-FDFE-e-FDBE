<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MercadoPago extends Model
{
    use HasFactory;

    protected $table = 'mercado_pago';

    protected $primaryKey = 'id';

    public function cliente()
    {
        return $this->hasOne(Usuario::class);
    }

    public function curso()
    {
        return $this->hasOne(Curso::class);
    }

    protected $fillable = [
        'mercado_pago_id',
        'cliente_id',
        'curso_id'
    ];

    protected $hidden = [];

    protected $casts = [];
}
