@extends('layouts.admin')

@section('content')
    <div>
        <form class="Form" action="{{route('product.store')}}" method="post">
            @csrf
            <label for="name" class="m-t-24"> Nombre</label>
            <input id="name" name="name" class="{{($errors->first('name'))?'error':''}}" placeholder="Nombre producto" type="text" value="{{old('name')}}">

            <label for="shortdescription"> Descripción corta</label>
            <input id="shortdescription" class="{{($errors->first('shordescription'))?'error':''}}" name="shortdescription" placeholder="Descripción corta" type="text" value="{{old('shortdescription')}}">

            <label for="description"> Descripción</label>
            <textarea id="description" class="{{($errors->first('description'))?'error':''}}" name="description" placeholder="description" type="text">{!! old('description') !!}</textarea>

            <label for="video_promo" class="m-t-24">Video promocional</label>
            <input id="video_promo" class="{{($errors->first('video_promo'))?'error':''}}" name="video_promo" class="{{($errors->first('video_promo'))?'error':''}}" placeholder="Video" type="text" value="{{old('video_promo')}}">

            <label for="invitation_text">Texto de invitación</label>
            <textarea id="invitation_text" class="{{($errors->first('invitation_text'))?'error':''}}" name="invitation_text" placeholder="invitation_text" type="text">{!! old('invitation_text') !!}</textarea>

            <label for="price"> Precio</label>
            <input id="price" name="price" class="{{($errors->first('price'))?'error':''}}" placeholder="Precio del producto" type="number" value="{{old('price')}}">

            <label for="image_pc">Imagen para pc</label>
            <input id="image_pc" class="{{($errors->first('image_pc'))?'error':''}}" name="image_pc" placeholder="Imagen para pc" type="text" value="{{old('image_pc')}}">
            <label for="image_mobile">Imagen para movil</label>
            <input id="image_mobile" class="{{($errors->first('image_mobile'))?'error':''}}" name="image_mobile" placeholder="iamgen móviles" type="text" value="{{old('image_mobile')}}">



            <label for="is_active">Activo</label>
                            <select id="is_active" class="{{($errors->first('is_active'))?'error':''}}" name="is_active">
                                <option value="1" selected>Si</option>
                                <option value="0">No</option>
                            </select>

            <label for="location_product" class="m-t-24">Ubicación del producto</label>
            <input id="location_product" class="{{($errors->first('location_product'))?'error':''}}" name="location_product" class="{{($errors->first('location_product'))?'error':''}}" placeholder="location_product" type="text" value="{{old('location_product')}}">

            <label for="subcategory_id">Subcategoria:</label>
               <select class="{{($errors->first('subcategory_id'))?'error':''}}"
                       id="subcategory_id" name="subcategory_id">
                   <option  value="">Selecciona una subcategoria</option>
                   @foreach($subcategories as $subcategory)
                       <option data-subcategory="{{$subcategory->id}}"
                               value="{{$subcategory->id}}" {{ (old("subcategory_id") == $subcategory->id ? "selected":"") }}>{{$subcategory->category->name.'/'.$subcategory->name}}
                       </option>
                   @endforeach
            </select>

            <button type="submit" class="is-full-width">ENVIAR</button>

        </form>
    </div>
@endsection
