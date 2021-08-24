<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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


    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/css/style.default.css') }}" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="" />
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                                <div class="brand-text d-none d-lg-inline-block">
                                    <span>Centre </span><strong>Culturel</strong>
                                </div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none">
                                    <strong>BD</strong>
                                </div>
                            </a>
                            <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Logout    -->
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Déconnexion') }}
                                    </x-responsive-nav-link>

                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar">
                        <img src="{{ asset('/img/avatar.svg') }}" alt="..." class="img-fluid rounded-circle" />
                    </div>
                    <div class="title">
                        <h1 class="h4 text-capitalize"></h1>
                        <div>{{ Auth::user()->name }}</div>
                        <p>Administrateur</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="{{ route('dashboard') }}"> <i class="fas fa-home"></i>Acceuil </a>
                    </li>
                    <li>
                        <a href="#"> <i class="far fa-calendar-alt"></i>Calendrier </a>
                    </li>
                    <li>
                        <a href="{{ route('reservations.liste') }}"> <i class="far fa-address-book"></i>Réservations </a>
                    </li>
                    <li>
                        <a href="#collapseExample" aria-expanded="false" data-bs-toggle="collapse">
                            <i class="fas fa-user-alt"></i>Visiteurs
                        </a>
                        <ul id="collapseExample" class="collapse list-unstyled">
                            <li><a href="{{ route('visiteurs.ajout') }}">Ajouter</a></li>
                            <li><a href="{{ route('visiteurs.liste') }}">Liste des visiteurs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#example" aria-expanded="false" data-bs-toggle="collapse">
                            <i class="fas fa-laptop"></i>Ordinateurs
                        </a>
                        <ul id="example" class="collapse list-unstyled">
                            <li><a href="{{ route('ordinateurs.ajout') }}">Ajouter</a></li>
                            <li><a href="{{ route('ordinateurs.liste') }}">Liste des ordinateurs</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="content-inner">

                @yield('content')

                <!-- Page Footer-->
                <footer class="main-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Carole Hafizou &copy; 2021</p>
                            </div>
                            <div class="col-sm-6 text-end">
                                <p>
                                    <a href="mention.php" class="external">Mentions Légales</a>
                                </p>
                                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
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