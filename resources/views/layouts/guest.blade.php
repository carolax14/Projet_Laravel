<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Centre Culturel</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="robots" content="all,follow" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('/outils/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('/outils/font-awesome/css/font-awesome.min.css') }}" />
    <link href="{{ asset('/outils/font-awesome/css/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('/css/fontastic.css') }}" />
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/css/style.default.css') }}" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="" />
</head>



<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>

</html>