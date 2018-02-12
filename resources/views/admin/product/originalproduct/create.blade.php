@extends('layouts.admin')

@section('content')
    <div>
      <h2>Crear Producto Original {{$id}}</h2>
        <form class="Form" action="{{route('product.originalproduct.store',$id)}}" method="post">
            @csrf

            <input id="false_product_id" name="false_product_id" type="hidden" value="{{$id}}">

            <label for="name" class="m-t-24"> Nombre</label>
            <input id="name" name="name" class="{{($errors->first('name'))?'error':''}}" placeholder="Nombre producto" type="text" value="{{old('name')}}">

            <label for="description"> Descripción</label>
            <textarea id="description" class="{{($errors->first('description'))?'error':''}}" name="description" placeholder="description" type="text">{!! old('description') !!}</textarea>

            <label for="video_promo" class="m-t-24">Video promocional</label>
            <input id="video_promo" class="{{($errors->first('video_promo'))?'error':''}}" name="video_promo" class="{{($errors->first('video_promo'))?'error':''}}" placeholder="Video" type="text" value="{{old('video_promo')}}">

            <label for="brand_name">Marca</label>
            <input id="brand_name" class="{{($errors->first('brand_name'))?'error':''}}" name="brand_name" placeholder="Marca" type="text" value="{{old('brand_name')}}">

            <label for="price"> Precio</label>
            <input id="price" name="price" class="{{($errors->first('price'))?'error':''}}" placeholder="Precio del producto" type="number" value="{{old('price')}}">

            <button type="submit" class="is-full-width">ENVIAR</button>

        </form>
    </div>
@endsection
