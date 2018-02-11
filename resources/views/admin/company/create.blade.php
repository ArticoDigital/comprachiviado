@extends('layouts.admin')

@section('content')

    <div>
        <form class="Form" action="{{route('company.store')}}" method="post">
            @csrf
            <label for="name" class="m-t-24"> Nombre</label>
            <input id="name" name="name" class="{{($errors->first('name'))?'error':''}}" placeholder="Nombre de la empresa" type="text" value="{{old('name')}}">

            <label for="nit" class="m-t-24"> NIT</label>
            <input id="nit" name="nit" class="{{($errors->first('nit'))?'error':''}}" placeholder="Nit de la empresa" type="text" value="{{old('nit')}}">

            <label for="address" class="m-t-24"> Dirección de la empresa</label>
            <input id="address" name="address" class="{{($errors->first('address'))?'error':''}}" placeholder="Dirección de la empresa" type="text" value="{{old('address')}}">

            <label for="company_email" class="m-t-24"> Correo de la empresa</label>
            <input id="company_email" name="company_email" class="{{($errors->first('company_email'))?'error':''}}" placeholder="Email de la empresa" type="text" value="{{old('company_email')}}">

            <label for="city" class="m-t-24"> Ciudad</label>
            <input id="city" name="city" class="{{($errors->first('city'))?'error':''}}" placeholder="Ciudad de la empresa" type="text" value="{{old('city')}}">

            <label for="contact_name" class="m-t-24"> Nombre del contacto de la empresa</label>
            <input id="contact_name" name="contact_name" class="{{($errors->first('contact_name'))?'error':''}}" placeholder="Nombre contacto de la empresa" type="text" value="{{old('contact_name')}}">

            <label for="contact_tel" class="m-t-24"> TEl contacto de la empresa</label>
            <input id="contact_tel" name="contact_tel" class="{{($errors->first('contact_tel'))?'error':''}}" placeholder="Tel de contacto de la empresa" type="text" value="{{old('contact_tel')}}">

            <label for="contact_cel" class="m-t-24"> Cel contacto de la emrpesa</label>
            <input id="contact_cel" name="contact_cel" class="{{($errors->first('contact_cel'))?'error':''}}" placeholder="Cel contacto de la empresa" type="text" value="{{old('contact_cel')}}">

            <label for="contact_email" class="m-t-24"> Correo del contacto</label>
            <input id="contact_email" name="contact_email" class="{{($errors->first('contact_email'))?'error':''}}" placeholder="Correo del contacto de la empresa" type="text" value="{{old('contact_email')}}">

            <label for="contact_iddoc" class="m-t-24"> ID del contacto</label>
            <input id="contact_iddoc" name="contact_iddoc" class="{{($errors->first('contact_iddoc'))?'error':''}}" placeholder="ID contacto de la empresa" type="text" value="{{old('contact_iddoc')}}">


            <button type="submit" class="is-full-width">ENVIAR</button>

        </form>
    </div>
@endsection
