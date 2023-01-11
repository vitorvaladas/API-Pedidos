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

    public static function criaTabelas(){

        // Verifica se existe tabela 'clientes' no banco de dados, se não houver, cria

        $tabelaClientes = DB::select("CREATE TABLE IF NOT EXISTS `clientes` (
            `ID_CLIENTE` int NOT NULL,
            `NOME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `CIDADE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `ESTADO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `TELEFONE` int NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            PRIMARY KEY (`ID_CLIENTE`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
        

        // Verifica se existe tabela 'pedidos' no banco de dados, se não houver, cria

        $tabelaPedidos = DB::select("CREATE TABLE IF NOT EXISTS `pedidos` (
        `ID_CLIENTE` int NOT NULL,
        `VALOR_PEDIDO` double(8,2) NOT NULL,
        `VALOR_FRETE` double(8,2) NOT NULL,
        `DATA_ENTREGA` date NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`ID_CLIENTE`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
    
        if($tabelaClientes == true && $tabelaPedidos == true){
            return true;
        }
    }
}
