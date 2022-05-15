<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClientesController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', function (){
    return view('App');
});

Route::get('/clientes', function(){
    return view('App\Http\Controllers\ClientesController@index');
});
Route::get('/cliente/{IDCliente}',
    'App\Http\Controllers\clientesController@create')
    ->where('IDCliente','[0-9]+');
Route::get('/cliente_delete/{IDCliente}',
    'App\Http\Controllers\clientesController@edit')
    ->where('IDCliente','[0-9]+');