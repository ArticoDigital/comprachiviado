@extends('layouts.admin')

@section('content')
    <div>
      <h2>Crear Especial</h2>
        <form class="Form" action="{{route('special.store')}}" method="post">
            @csrf
            <label for="name" class="m-t-24"> Nombre de la promo</label>
            <input id="name" name="name" class="{{($errors->first('name'))?'error':''}}" placeholder="Nombre producto" type="text" value="{{old('name')}}">

            <label for="special_image">Imagen para pc</label>
            <input id="special_image" class="{{($errors->first('special_image'))?'error':''}}" name="special_image" placeholder="Imagen para pc" type="text" value="{{old('special_image')}}">
            <label for="special_image_mobile">Imagen para movil</label>
            <input id="special_image_mobile" class="{{($errors->first('special_image_mobile'))?'error':''}}" name="special_image_mobile" placeholder="iamgen móviles" type="text" value="{{old('special_image_mobile')}}">
            <label for="is_active">Activo</label>
            <select id="is_active" class="{{($errors->first('is_active'))?'error':''}}" name="is_active">
                <option value="1" selected>Si</option>
                <option value="0">No</option>
            </select>
            <label for="false_product_id">Producto ligado:</label>
            <select class="{{($errors->first('false_product_id'))?'error':''}}" id="false_product_id" name="false_product_id">
                <option  value="">Selecciona una producto</option>
                 @foreach($products as $product)
                   <option data-product="{{$product->id}}" value="{{$product->id}}" {{ (old("false_product_id") == $product->id ? "selected":"") }}>{{$product->name}}</option>
                @endforeach
           </select>




            <button type="submit" class="is-full-width">ENVIAR</button>

        </form>
    </div>
@endsection
