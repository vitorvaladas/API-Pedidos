<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'ID_CLIENTE',
        'VALOR_PEDIDO',
        'VALOR_FRETE',
        'DATA_ENTREGA',
    ];
    use HasFactory;
}
