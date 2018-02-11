@extends('layouts.admin')
@section('content')
<div class="row">
    <a href="{{route('category.create')}}">Crear una categoria</a>
</div>
<div class="table-container p-t-40 " >
    <table>
        <caption>Categorías</caption>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Icono</th>
            <th>Descripción</th>
            <th>Texto del botón</th>
            <th>Orden</th>
            <th>Activo</th>
        </tr>
        </thead>

        <tbody>
          @foreach($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->icon}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->button_text}}</td>
            <td>{{$category->order}}</td>
            <td>{{$category->is_active}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
