<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //Relacion M - 1con categoria 
    public function categoria(){
        return $this->belongsTo(Categoria::class,  'Categoria_id');
    } 
       //Relacion M - 1con categoria 
       public function marca(){
        return $this->belongsTo(Marca::class,  'marca_id');
    } 
}
