<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tienda-online', function () {
    $empresa = "Crackers Laps";
    $direccion = "Jilotepec Centro";
    $datos = [
        "empresa" => $empresa,
        "direccion" => $direccion,
        "edad" => 19,
        "noEstacion" => 1,
        "tablaMult" => 7,
        "equipos" => ["Necaxa", "Cruz Azul", "Toluca", "Chivas", "Pumas"],
        'numeroFactorial' => 5
    ];
    return view('nosotros', $datos);
})->name('nosotros');

Route::get('/venta-de-laptops', function () {
    return view('venta');
})->name('ventas');

Route::get('/contactanos', function () {
    // Forma 3 de redireccionamiento
    return to_route('formulario');  
})->name('contactos');

Route::get('/form-contacto', function (){
    return ("Bienvenido al Formulario de contacto");
})->name('formulario');