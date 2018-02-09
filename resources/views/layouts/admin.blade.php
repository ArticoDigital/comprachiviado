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
    <div class="container row justify-between align-center ">
        <div>
            menu
        </div>
        <div>Compra chiviado</div>
        <div class="row align-center">
            <span class="p-r-12" >{{auth()->user()->name}}</span>
            <a href="" class="far fa-bell"></a>
        </div>
    </div>
</header>
<main class="container">@yield('content')</main>

<script src="{{mix('js/app.js')}}"></script>
</body>
</html>