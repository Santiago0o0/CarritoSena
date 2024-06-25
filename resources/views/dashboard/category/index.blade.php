@extends('dashboard.master')
@section('titulo','Categorias')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <br>
        
    <div class="bg-success p-2 text-dark bg-opacity-25" id="text1" >CATEGORIAS DE PRODUCTOS </div>

    <br>
    <a href="{{url('dashboard/category/create')}}" class="btn btn-success" id="text2" >NUEVA CATEGORIA</a>
    <br>
    <hr>
    <br>
    <table class="table table-striped" id="table1">
        <thead>
            <tr>
                <th>Id Categoria</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $category)
            <tr>
                <td scope="row">{{ $category->id }}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->state ? _('activo') : _('inactivo')}}</td>
                <td><a href="{{url('dashboard/category/'.$category->id.'/edit')}}" class="bi bi-pencil"></a></td>
                <td>
                    <form action="{{ url('dashboard/category/'.$category->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>


    </div>
    <style>
    #text1 {
        text-align: center;
    }
    #table1 {
        margin: 0 auto;
        max-width: 1600px; 
    }
    #text2 {
            display: flex;
            justify-content: center;
            margin-left: 40px; /* Especifica el margen a la izquierda */
            margin-right: auto;
            max-width: 180px; 
    }
</style>

</main>
@endsection