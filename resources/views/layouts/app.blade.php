<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Centre Culturel</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="robots" content="all,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('/outils/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('/outils/font-awesome/css/font-awesome.min.css') }}" />
    <link href="{{ asset('/outils/font-awesome/css/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('/css/fontastic.css') }}" />
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" />


    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/css/style.default.css') }}" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="" />


</head>

<body>
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="container-fluid">
                {{ $header }}
            </div>
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('/outils/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/outils/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/outils/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/outils/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/outils/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/outils/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('/js/front.js') }}"></script>
</body>

</html>