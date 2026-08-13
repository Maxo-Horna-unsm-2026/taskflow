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
    $personas = [
        [
            'nombre' => 'maxo', 
            'apellido' => 'horna',
            'edad' => 22
        ],
        [
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'edad' => 30,
        ],
        [
            'nombre' => 'María',
            'apellido' => 'González',
            'edad' => 25,
        ],
        [
            'nombre' => 'Pedro',
            'apellido' => 'López',
            'edad' => 28,
        ],
        [
            'nombre' => 'Ana',
            'apellido' => 'Martínez',
            'edad' => 32,
        ],
    ];
    return view('welcome' , compact('personas'));
});
