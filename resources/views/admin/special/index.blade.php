@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{route('special.create')}}">Crear un especial</a>
</div>
<div class="table-container p-t-40 " >
    <table>
        <caption>Productos</caption>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Imagen especial</th>
            <th>Imagen especial móviles</th>
            <th>Categoria</th>
            <th>Subcategoría</th>
            <th>Producto ligado</th>
            <th>Activo</th>
        </tr>
        </thead>

        <tbody>
          @foreach($specials as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->special_image}}</td>
            <td>{{$item->special_image_mobile}}</td>
            <td>{{$item->falseProduct->subcategory->category->name}}</td>
            <td>{{$item->falseProduct->subcategory->name}}</td>
            <td>{{$item->falseProduct->name}}</td>
            <td>{{$item->is_active}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
