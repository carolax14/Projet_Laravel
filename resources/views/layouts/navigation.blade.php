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
                                <a href="" onclick="return confirm('Voulez-vous quitter votre session ?');" class="nav-link logout">

                                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </a>
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
                    <img src="public/img/avatar.svg" alt="..." class="img-fluid rounded-circle" />
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
                    <a href="welcome"> <i class="fas fa-home"></i>Acceuil </a>
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