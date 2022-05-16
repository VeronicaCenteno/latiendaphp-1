@extends('layouts.principal')

@section('contenido')
    <form class="col s8">
        <div class="row">
            <div class="col s8">
                <h1 class="pink-text text-darken-2">Nuevo Producto</h1>
            </div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre del producto" 
             id="nombre" 
            type="text"
            class="validate">
            <label for="nombre">
             Nombre Del Producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="descripcion" 
          type="text" 
          class="validate">
          <label for="desc">descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="Precio"
           type="number"
            class="validate">
          <label for="Precio">
              Precio</label>
        </div>
      </div>
     <div class="row">
      <div class="col.s8.input-field">
        <select name="marca" id="marca">
          <option>
            Elija la marca del producto
          </option>
          @foreach($marcas as $marca)
          <option>{{ $marca->nombre }}</option>
          @endforeach
        </select>
      </div>

     </div>
      <div class="row">
        <div class="file-field input-field">
        <div class="btn">
            <span>Ingrese Imagen</span>
            <input type="file">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
        </div>
        </div>
      
      <div class="row">
        <div class="col s8">
        <a class="waves-effect waves-light btn"><i class="material-icons right"></i>Guardar</a>
          </div>
        </div>
      </div>
    </form>
 
  @endsection