@extends('layouts.admin')

@section('content')

    <div>
        <form class="Form" action="{{route('banner.store')}}" method="post">
            @csrf

            <label for="background_color"> background color</label>
            <input id="background_color" name="background_color" placeholder="Background color" type="text">

            <label for="background_image" class="m-t-24"> background Image</label>
            <input id="background_image" name="background_image" class="{{($errors->first('background_image'))?'error':''}}" placeholder="background Image" type="text">

            <label for="text_title" class="m-t-24"> Título</label>
            <input id="text_title" name="text_title" placeholder="Titulo del Banner" type="text">

            <label for="product_text_content" class="m-t-24"> Texto del produto</label>
            <input id="product_text_content" name="product_text_content" placeholder="Texto del producto" type="text">

            <label for="product_text_color" class="m-t-24"> Color del texto</label>
            <input id="product_text_color" name="product_text_color" placeholder="Color del texto del producto" type="text">

            <label for="product_text_location" class="m-t-24"> Ubicación del texto</label>
            <input id="product_text_location" name="product_text_location" placeholder="Ubicación en el banner" type="text">

            <label for="text_button" class="m-t-24"> Texto del botón</label>
            <input id="text_button" name="text_button" placeholder="Texto del boton" type="text">

            <label for="is_active">Activo</label>
                            <select id="is_active" class="{{($errors->first('is_active'))?'error':''}}" name="is_active">
                                <option value="1" selected>Si</option>
                                <option value="0">No</option>
                            </select>


            <label for="url_button" class="m-t-24"> URL</label>
            <input id="url_button" name="url_button" class="{{($errors->first('url_button'))?'error':''}}" placeholder="url_button" type="text">

            <label for="order" class="m-t-24"> Orden</label>
            <input id="order" name="order" placeholder="Orden en el banner" type="number">

            <button type="submit" class="is-full-width">ENVIAR</button>











        </form>
    </div>
@endsection
