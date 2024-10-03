<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/administrador', function () {
    return view('administrador');
});

Route::get('/formulario', function () {
    return view('Formulario');
});

Route::get('/interfazcliente', function () {
    return view('interfaz_cliente');
});

Route::get('/secretaria', function () {
    return view('secretaria');
});

Route::get('/login', function () {
    return view('/login/dist/login');
});

Route::get('/loginolvi', function () {
    return view('/login/olvi/loginolvi');
});

Route::get('/loginregis', function () {
    return view('/login/regis/loginregis');
});