@extends('layouts.admin')

@section('content')

    <div>
      <h2>Crear Categoría</h2>
        <form class="Form" action="{{route('category.store')}}" method="post">
            @csrf
            <label for="name" class="m-t-24"> Nombre</label>
            <input id="name" name="name" class="{{($errors->first('name'))?'error':''}}" placeholder="Nombre de la categoria" type="text" value="{{old('name')}}">

            <label for="text_color"> Color del texto</label>
            <input id="text_color" name="text_color" placeholder="Color del texto" type="text" value="{{old('text_color')}}">

            <label for="background_color"> background color</label>
            <input id="background_color" name="background_color" placeholder="Background color" type="text" value="{{old('background_color')}}">

            <label for="icon" class="m-t-24"> Icono de categoría</label>
            <input id="icon" name="icon" class="{{($errors->first('icon'))?'error':''}}" placeholder="Icono de la categoria" type="text" value="{{old('icon')}}">

            <label for="description"> Descripción</label>
            <input id="description" name="description" placeholder="Descripción de la categoría" type="text" value="{{old('description')}}">

            <label for="is_active">Activo</label>
                            <select id="is_active" class="{{($errors->first('is_active'))?'error':''}}" name="is_active">
                                <option value="1" selected>Si</option>
                                <option value="0">No</option>
                            </select>

            <label for="button_text" class="m-t-24"> Texto del botón</label>
            <input id="button_text" name="button_text" class="{{($errors->first('button_text'))?'error':''}}" placeholder="Texto del boton" type="text" value="{{old('button_text')}}">

            <label for="button_background_color"> background color</label>
            <input id="button_background_color" name="button_background_color" placeholder="Background color del boton" type="text" value="{{old('button_background_color')}}">

            <label for="order" class="m-t-24"> Orden</label>
            <input id="order" name="order" class="{{($errors->first('order'))?'error':''}}" placeholder="Orden en el banner" type="number" value="{{old('order')}}">

            <button type="submit" class="is-full-width">ENVIAR</button>

        </form>
    </div>
@endsection
