@extends('dashboard.master')
@section('titulo','NuevaCategoria')
@include('layouts/navigation')
@section('contenido')
<br>
<div class="bg-success p-2 text-dark bg-opacity-25" id="text1" >EDITA UN ARTICULO </div>
<br>
<div class="container py-4">
<h1 class="mb-4">Rellena los espacios</h1>
  <form action="{{ url('dashboard/article/'.$article->id) }}" method="post">
    @csrf
    @method('PUT')


    <div class="form-group row">
        <label for="code" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="code" id="code" value="{{$article->code}}" placeholder="Ingresa el codigo del producto">
        </div>
        </div>


    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" value="{{$article->name}}" placeholder="Ingresa el Nombre del producto">
        </div>
    </div>


    <div class="form-group row">
        <label for="Category" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
            <select name="category" id="category" class="form-select"  required >
                <option value="">Seleccionar Categoria</option>
                @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="form-group row">
        <label for="Sale_Price" class="col-sm-2 col-form-label">Precio Venta</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Sale_Price" id="Sale_Price" value="{{$article->Sale_Price}}" placeholder="Ingresa el Precio de venta">
        </div>
    </div>


    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">Cantidad Disponible(Stock)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="stock" id="stock" value="{{$article->stock}}" placeholder="Ingresa la cantidd disponible">
        </div>
    </div>


    <div class="form-group row">
        <label for="description">Descripcion</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="description" id="description" >{{$article->description}}</textarea>
        </div>
    </div>


    <div class="form-group row">
        <label for="state">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="state" id="state">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
    </div>


    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>
           <a href="{{url('dashboard/article')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>


  </form>  
</div>
<style>
    #text1 {
        text-align: center;
    }

</style>

@endsection
