@extends('layouts.front')

@section('content')
    <div class=" row is-full-screen align-center justify-center">

        <form method="POST" class="Form-login m-b-80" action="{{ route('login') }}">
            <h1 class="is-text-center m-b-24">Ingrese los datos</h1>
            @csrf
            <label for="email">E-Mail</label>
            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))<span>{{ $errors->first('email') }}</span>@endif

            <label for="password">Contraseña</label>
            <input id="password" type="password"
                   class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))<span>{{ $errors->first('password') }}</span>@endif

            <div><input id="remember" type="checkbox"><label for="remember">Recuerdame</label></div>


            <button type="submit" class="is-full-width">Ingresar</button>
            <a class="btn btn-link" href="{{ route('password.request') }}">Olvido la contraseña?</a>

        </form>
    </div>
@endsection
