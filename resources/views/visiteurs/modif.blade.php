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
        <li class="breadcrumb-item"><a href="home.php">Acceuil</a></li>
        <li class="breadcrumb-item active">Visiteurs - Modifier</li>
    </ul>
</div>
<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Modifier un visiteur</h3>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <form action="{{ route('visiteurs.update',$visiteur->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3 form-group">
                                <label class="form-label">Nom</label>
                                <input type="hidden" name="id" value="{{$visiteur->id}}" class="form-control text-uppercase" required>
                                <input type="text" name="visteur_nom" value="{{$visiteur->visiteur_nom}}" placeholder="Nom..." class="form-control text-uppercase" required>

                            </div>
                            <div class="mb-3 form-group">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="visteur_prenom" value="{{$visiteur->visiteur_prenom}}" placeholder="Prénom..." class="form-control text-capitalize" required>
                            </div>
                            <div class="mb-3 form-group">
                                <label class="form-label">Adresse mail</label>
                                <input type="email" name="visteur_mail" value="{{$visiteur->visiteur_mail}}" placeholder="Adresse mail..." class="form-control" required>
                            </div>
                            <div class="mb-3 form-group">
                                <button type="submit" value="Modifier" name="Modifier" class="btn btn-primary">Modifier</button>
                                <button name="Retour" class="btn btn-danger"><a href="{{ route('visiteurs.liste') }}">Retour</a></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection