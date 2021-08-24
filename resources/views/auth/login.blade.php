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
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>Centre Culturel</h1>
                                </div>
                                <p>Bienvenu sur notre application</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />


                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" type="email" name="email" placeholder="Adresse mail" :value="old('email')" required autofocus data-msg="Veuillez entrer votre login" class="input-material">
                                        <!--                   <label for="login-username" class="label-material">Login</label>
 -->
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" name="password" placeholder="Mot de passe" required autocomplete="current-password" data-msg="Veuillez entrer votre mot de passe" class="input-material">
                                        <!--                     <label for="login-password" class="label-material">Mot de passe</label>
 -->
                                    </div>
                                    <!-- Remember Me -->
                                    <!-- <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div> -->

                                    <a id="login" class="btn btn-primary">
                                        <button type="submit" class="btn btn-primary" name="connexion">{{ __('Connexion') }}</button>
                                    </a>
                                </form>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-pass">Mot de passe oublié ?</a>
                                @endif
                                <br>
                                <small>Horaire d'ouverture : 9h00 - 18h00 </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Carole Hafizou &copy; 2021</p>
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