<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Admin compra chiviado</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500,500i,700,700i,900,900i">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<header class="Header-admin p-20 m-b-24 is-shadow">
    <div class=" row justify-between align-center ">
        <div id="menu-toggle">
            <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="cross">
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="hide-tablet">Compra chiviado</div>
        <div class="row align-center">
            <span class="p-r-12" >{{auth()->user()->name . auth()->user()->lastname}}</span>
            <a href="" class="far fa-bell p-r-12" ></a>
            <a href="{{ url('/salir') }}" class="fas fa-sign-out-alt"></a>
        </div>
    </div>
</header>
<nav id="Nav-admin">
    <ul>
        <li><a href="{{route('banner.index')}}"><i class="fas fa-image "></i> Banner</a></li>
        <li><a href="{{route('category.index')}}"><i class="fas fa-folder"></i>Categorias</a></li>
        <li><a href="{{route('subcategory.index')}}"><i class="fas fa-folder-open"></i>Subcategorias</a></li>
        <li><a href="{{route('company.index')}}"><i class="fas fa-building"></i>Empresas</a></li>
        <li><a href="{{route('coupon.index')}}"><i class="fas fa-bookmark"></i>Cupones</a></li>
        <li><a href="{{route('product.index')}}"><i class="fas fa-archive"></i>Productos</a></li>
        <li><a href="{{route('promo.index')}}"><i class="fas fa-tag"></i>Promociones</a></li>
        <li><a href="{{route('special.index')}}"><i class="fas fa-star"></i>Especiales</a></li>
    </ul>
</nav>
<main class="container">@yield('content')</main>


<script src="{{mix('js/app.js')}}"></script>
</body>
</html>