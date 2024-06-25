@extends('dashboard.master')
@section('titulo','Articulos')
@include('layouts/navigation')
@section('contenido')
<br>
<div class="bg-success p-2 text-dark bg-opacity-25" id="text1" >LISTADO DE PRODUCTOS </div>

<br>
<a href="{{url('dashboard/article/create')}}" class="btn btn-success" id="text2" >NUEVO ARTICULO</a>
<br>
    <hr>
    <br>
<div class="container py-4">
  

    <table class="table table-striped" id="table1">
        <thead>
            <tr>
                <th>Id Producto</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Categoria</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($article as $article)
            <tr>
                <td scope="row">{{$article->id}}</td>
                <td>{{$article->code}}</td>
                <td>{{$article->name}}</td>
                <td>{{$article->Sale_Price}}</td>
                <td>{{$article->stock}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->state ? __('activo') : __('inactivo') }}</td>
                <td>{{$article->category->name}}</td>
                <td>{{$article->created_at}}</td>
                <td>{{$article->updated_at}}</td>
                <td>
                    <a href="{{ url('dashboard/article/'.$article->id.'/edit') }}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/article/'.$article->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit" ></button>                                
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
@endsection