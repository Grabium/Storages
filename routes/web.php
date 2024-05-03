<?php

use Illuminate\Support\Facades\Route;

//https://92494a40-e76a-4c30-a7ad-bbe6a97c3df2-00-35tw3ddlxlec3.worf.replit.dev/

Route::get('/', [App\Http\Controllers\Storages\RecuperarArquivosController::class, 'testarExistenciaDeArquivo']);

