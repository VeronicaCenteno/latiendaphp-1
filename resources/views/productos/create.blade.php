@extends('layouts.principal')

@section('contenido')
    <form class="col s8" method="POST" action="{{ route('productos.store') }}">
      @csrf
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
            class="validate"
            name="nombre">
            <label for="nombre">
             Nombre Del Producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="descripcion" 
          type="text" 
          class="validate"
          name="desc">
          <label for="desc">
            descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="Precio"
           type="number"
            class="validate"
            name="precio">
          <label for="Precio">
              Precio</label>
        </div>
      </div>
     <div class="row">
      <div class="col s8 input-field">
        <select name="marca" id="marca">
          <option>
            Elija la marca del producto
          </option>
          @foreach($marcas as $marca)
          <option value="{{ $marca->id }}">
            {{ $marca->nombre }}
          </option>
          @endforeach
        </select>
      </div>

     </div>
    <div class="row">
  <div class="col s8 input-field">
    <select name="categoria" id="categoria">
    <option>
            Elija la Categoria del producto
          </option>
      @foreach($categorias as $categoria)
      <option value="{{ $categoria->id }}">
        {{$categoria->nombre}}
      </option>
      @endforeach
    </select>
  </div>
    </div>
      <div class="row">
        <div class="file-field s8 input-field">
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
          <button class="btn waves-effect waves-light" type="" name="action">Guardar
            <i class="material-icons right"></i>
          </button>
        </div>
      </div>
    </form>
 
  @endsection