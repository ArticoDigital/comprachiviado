@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{route('promo.create')}}">Crear una promo</a>
</div>
<div class="table-container p-t-40 " >
    <table>
        <caption>Promos</caption>
        <thead>
        

        <tr>
            <th>Nombre</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Descuento</th>
            <th>Producto</th>
            <th>Empresa</th>
            <th>Activo</th>
        </tr>
        </thead>

        <tbody>
          @foreach($promos as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->init_date}}</td>
            <td>{{$item->finish_date}}</td>
            <td>{{$item->discount_percentage}}</td>
            <td>{{$item->falseProduct->name}}</td>
            <td>{{$item->company->name}}</td>
            <td>{{$item->is_active}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
