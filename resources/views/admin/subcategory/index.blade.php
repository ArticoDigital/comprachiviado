@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{route('subcategory.create')}}">Crear una subcategoria</a>
</div>
<div class="table-container p-t-40 " >
    <table>
        <caption>Subcategorías</caption>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Activo</th>
        </tr>
        </thead>

        <tbody>
          @foreach($subcategories as $subcategory)
        <tr>
            <td>{{$subcategory->name}}</td>
            <td>{{$subcategory->description}}</td>
            <td>{{$subcategory->category->name}}</td>
            <td>{{$subcategory->is_active}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
