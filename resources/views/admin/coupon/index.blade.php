@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{route('company.create')}}">Coupones</a>
</div>
<div class="table-container p-t-40 " >
    <table>
        <caption>Cupones que se han creado</caption>
        <thead>
        <tr>
            <th>Código cupón</th>
            <th>Usuario</th>
            <th>Email Usuario</th>
            <th>Promo product</th>
            <th>Promo Company</th>
            <th>Fecha creación</th>
        </thead>

        <tbody>
          @foreach($coupons as $item)
        <tr>
            <td>{{$item->code_bono}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->user->email}}</td>
            <td>{{$item->promo->falseProduct->name}}</td>
            <td>{{$item->promo->company->name}}</td>
            <td>{{$item->created_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
