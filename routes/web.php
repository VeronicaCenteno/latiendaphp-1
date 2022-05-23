<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Controllers\ProductoController;

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

Route::get('prueba', function(){
    //Seleccionar todas las marcas
    $Marcas = Marca::all();
    //Seleccionar todas las categorias
    $Categorias = Categoria::all();
    // ingresar marcas y categorias a la vista
    return view('productos.create')
                ->with('categorias', $Categorias)
                ->with('marcas', $Marcas);
});

// Rutas  REST
Route::resource('productos',  ProductoController::class);