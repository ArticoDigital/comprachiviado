@extends('layouts.admin')
@section('content')
<div class="row">
    <a href="{{route('company.create')}}">Crear una empresa</a>
</div>
<div class="table-container p-t-40 " >
    <table>
        <caption>Empresas</caption>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>NIT</th>
            <th>Dirección</th>
            <th>Email empresa</th>
            <th>Ciudad</th>
            <th>Nombre de contacto</th>
            <th>Cel de contacto</th>
            <th>Email de contacto</th>
        </thead>

        <tbody>
          @foreach($companies as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->nit}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->company_email}}</td>
            <td>{{$item->city}}</td>
            <td>{{$item->contact_name}}</td>
            <td>{{$item->contact_cel}}</td>
            <td>{{$item->contact_email}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
