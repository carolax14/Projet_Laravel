@extends('layout')

@section('content')

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Visiteurs</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Acceuil</a></li>
        <li class="breadcrumb-item active">Visiteurs - Créer</li>
    </ul>
</div>
<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">

            @if(session()->has("success"))
            <div class="alert bg-green">
                {{session()->get("success")}}
            </div>
            @endif
            <!-- Basic Form-->
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Ajouter un visiteur</h3>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <form action="{{ route('visiteurs.ajout') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col form-group">
                                    <label class="form-label">Nom</label>
                                    <input type="text" name="visiteur_nom" placeholder="Nom..." class="form-control text-uppercase" required>
                                </div>
                                <div class="col form-group">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" name="visiteur_prenom" placeholder="Prénom..." class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse mail</label>
                                <input type="email" name="visiteur_mail" placeholder="Adresse mail..." class="form-control" required>
                            </div>
                            <div class="mb-3 form-group">
                                <input type="submit" value="Ajouter" name="Ajouter" class="btn bg-green">
                                <input type="submit" value="Effacer" name="Effacer" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection