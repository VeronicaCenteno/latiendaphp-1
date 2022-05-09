<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Paises', function (){

    $Paises =[
        "Colombia"  => [
            "cap"   => "Bogotá",
            "mon"   => "Peso",
            "pob"   => 51,
            "ciu"   => [
                    "Medellin",
                    "Cali",
                    "Pereira"
            ]
        ],

        "Ecuador"   =>[
            "cap"   => "Quito",
            "mon"   => "Dolar",
            "pob"   => 20,
            "ciu"   => [
                    "Cuenca",
                    "Guayaquil"
                 
            ]
             
        
            ],

            "Brasil"   =>[
                "cap"   => "Brasilia",
                "mon"   => "Real",
                "pob"   => 21,
                "ciu"   => [
                        "
                        ",
                        "Guayaquil"
                     
                ]
                 
            
                ],
    ];   
    
    return view ('Paises')
    -> with( 'Paises', $Paises);

}); 