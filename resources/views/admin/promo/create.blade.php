@extends('layouts.admin')

@section('content')
    <div>
      <h2>Crear Promoción</h2>
        <form class="Form" action="{{route('promo.store')}}" method="post">
            @csrf
            <label for="name" class="m-t-24"> Nombre</label>
            <input id="name" name="name" class="{{($errors->first('name'))?'error':''}}" placeholder="Nombre promoción" type="text" value="{{old('name')}}">

            <label for="init_date">Fecha de inico</label>
            <input id="init_date" class="{{($errors->first('init_date'))?'error':''}}" name="init_date" placeholder="fecha inicio" type="date" value="{{old('init_date')}}">

            <label for="finish_date">Fecha de finalización</label>
            <input id="finish_date" class="{{($errors->first('finish_date'))?'error':''}}" name="finish_date" placeholder="fecha finalización" type="date" value="{{old('finish_date')}}">

            <label for="special_media" class="m-t-24">Media especial</label>
            <input id="special_media" class="{{($errors->first('special_media'))?'error':''}}" name="special_media" class="{{($errors->first('special_media'))?'error':''}}" placeholder="Media especial" type="text" value="{{old('special_media')}}">

            <label for="text_promo">Texto de promoción</label>
            <textarea id="text_promo" class="{{($errors->first('text_promo'))?'error':''}}" name="text_promo" placeholder="description" type="text">{!! old('text_promo') !!}</textarea>

            <label for="discount_percentage">Descuento porcentual</label>
            <input id="discount_percentage" name="discount_percentage" class="{{($errors->first('discount_percentage'))?'error':''}}" placeholder="Descuento porcentual" type="number" value="{{old('discount_percentage')}}">


            <label for="is_active">Activo</label>
                            <select id="is_active" class="{{($errors->first('is_active'))?'error':''}}" name="is_active">
                                <option value="1" selected>Si</option>
                                <option value="0">No</option>
                            </select>

            <label for="false_product_id">Producto ligado:</label>
               <select class="{{($errors->first('false_product_id'))?'error':''}}"
                       id="false_product_id" name="false_product_id">
                   <option  value="">Selecciona una producto</option>
                   @foreach($products as $product)
                       <option data-product="{{$product->id}}"
                               value="{{$product->id}}" {{ (old("false_product_id") == $product->id ? "selected":"") }}>{{$product->name}}
                       </option>
                   @endforeach
            </select>
            <label for="company_id">Empresa ligado:</label>
               <select class="{{($errors->first('company_id'))?'error':''}}"
                       id="company_id" name="company_id">
                   <option  value="">Selecciona una empresa</option>
                   @foreach($companies as $company)
                       <option data-product="{{$company->id}}"
                               value="{{$company->id}}" {{ (old("company_id") == $company->id ? "selected":"") }}>{{$company->name}}
                       </option>
                   @endforeach
            </select>

            <button type="submit" class="is-full-width">ENVIAR</button>

        </form>
    </div>
@endsection
