@extends('layouts.admin')

@section('content')

    <div>
        <form class="Form" action="{{route('banner.store')}}" method="post">
            @csrf
            <label for="input-text"> background color</label>
            <input id="input-text" name="background_color" placeholder="Background color" type="text">
            <label for="input-text" class="m-t-24"> background Image</label>
            <input id="input-text" name="name" placeholder="background Image" type="color">
            <button type="submit" class="is-full-width">ENVIAR</button>
        </form>
    </div>
@endsection

