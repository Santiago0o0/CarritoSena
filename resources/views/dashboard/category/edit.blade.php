@extends('dashboard.master')
@section('titulo','NuevaCategoria')
@include('layouts/navigation')
@section('contenido')
<br>
<div class="bg-success p-2 text-dark bg-opacity-25" id="text1" >EDITA TU CATEGORIA </div>
<br>
<div class="container py-4">
<h1 class="mb-4">Rellena los espacios</h1>
  <form action="{{ url('dashboard/category/'.$category->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" placeholder="Ingresa el Nombre categoria">
        </div>
        <br>
    </div>
    <div class="form-group row">
        <label for="description">Descripcion</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="description" id="description">{{$category->description}}</textarea>
        </div>
    <br>

    </div>
    <div class="form-group row">
        <label for="state">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="state" id="state">
                <option value="1" {{ $category->state == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $category->state == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Actualizar</button>
           <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
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