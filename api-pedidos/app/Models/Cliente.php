<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Cliente extends Model
{
    protected $fillable = [
        'ID_CLIENTE',
        'NOME',
        'CIDADE',
        'ESTADO',
        'TELEFONE',
    ];
    use HasFactory;
}
