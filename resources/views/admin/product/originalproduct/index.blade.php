@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{route('product.create')}}">Crear un producto</a>
</div>
<div class="table-container p-t-40 " >
    <table>
        <caption>Productos</caption>
        <thead>

        <tr>
            <th>Nombre</th>
            <th>Descripción corta</th>
            <th>Precio</th>
            <th>Imagen pc</th>
            <th>Imagen móviles</th>
            <th>Categoria</th>
            <th>Subcategoria</th>
            <th>Activo</th>
            <th>Producto original</th>
            <th>imagenes</th>
        </tr>
        </thead>

        <tbody>
          @foreach($false_products as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->shordescription}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->image_pc}}</td>
            <td>{{$item->image_mobile}}</td>
            <td>{{$item->subcategory->category->name}}</td>
            <td>{{$item->subcategory->name}}</td>
            <td>{{$item->is_active}}</td>
            <td>
              @if($item->Original_product <> null)
                            <span>Ver producto original {{$item->Original_product->name}}</span>
              @else
                            <span><a href="{{route('originalproduct.create')}}">Agregar producto original</a></span>
              @endif
            </td>
            <td>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
