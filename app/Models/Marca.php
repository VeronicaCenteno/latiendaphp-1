<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
      //Extender modelo para relacionarlo con producto 
      public function  productos(){
        //1 categoria - M productos
        return $this->hasMany(Producto::class);
    }
}
