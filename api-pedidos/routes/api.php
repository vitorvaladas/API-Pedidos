<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('pedidos', 'api\Pedidos\PedidosController');
Route::apiResource('cliente', 'api\Pedidos\ClienteController');

