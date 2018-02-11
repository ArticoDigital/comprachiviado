@extends('layouts.admin')
@section('content')

    <div class="row">
        <a href="{{route('banner.create')}}">Crear un banner</a>
    </div>
    <div class="table-container p-t-40 " >
        <table>
            <caption>Banners</caption>
            <thead>
            <tr>
                <th>Título</th>
                <th>Texto botón</th>
                <th>Texto del producto</th>
                <th>URL del botón</th>
                <th>Orden</th>
                <th>Activo</th>
            </tr>
            </thead>

            <tbody>
              @foreach($banners as $banner)
            <tr>
                <td>{{$banner->text_title}}</td>
                <td>{{$banner->text_button}}</td>
                <td>{{$banner->product_text_content}}</td>
                <td>{{$banner->url_button}}</td>
                <td>{{$banner->order}}</td>
                <td>{{$banner->is_active}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
