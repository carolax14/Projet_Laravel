@extends('layout')

@section('content')

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Réservations</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Acceuil</a></li>
        <li class="breadcrumb-item active">Réservations</li>
    </ul>
</div>
<div class="card-body text-center">
    <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary">Ajouter une réservation </button>
    <!-- Modal-->
    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="exampleModalLabel" class="modal-title">Ajouter une réservation</h4>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('reservations.ajout') }}" method="POST">
                        @csrf
                        <div class="mb-3 form-group text-start">
                            <label class="form-label">Adresse mail</label>
                            <select id="mail" name="visiteur_id_fk" class="form-control form-select" required>
                                <option value="">Choisir l'adresse d'un visiteur...</option>
                                @foreach($visiteurs as $visiteur)
                                <option value="{{$visiteur->id}}">{{$visiteur->visiteur_mail}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 form-group text-start">
                            <label class="form-label">Ordinateur</label>
                            <select id="ordi" name="ordinateurs_id_fk" class="form-control form-select" required>
                                <option value="">Choisir un ordinateur...</option>
                                @foreach($ordinateurs as $ordinateur)
                                <option value="{{$ordinateur->id}}">{{$ordinateur->ordi_libelle}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 form-group text-start">
                            <label class="form-label">Date</label>
                            <input type="date" name="reserv_date" min="2021-01-01" placeholder="Choisir une date..." class="form-control" required>
                        </div>
                        <div class=" mb-3 form-group text-start">
                            <label class="form-label">Créneau Horaire</label>
                            <select id="creneau" name="creneau_id_fk" class="form-control form-select" required>
                                <option value="">Choisir un créneau horraire...</option>
                                @foreach($creneaus as $creneau)
                                <option value="{{$creneau->id}}">{{$creneau->creneau_horaire}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" mb-3 form-group">
                            <input type="submit" value="Enregistrer" name="Ajouter" class="btn bg-green">
                            <input type="submit" value="Effacer" name="Effacer" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="tables">
    <div class="container-fluid">
        <div class="row">
            @if(session()->has("success"))
            <div class="alert bg-green">
                {{session()->get("success")}}
            </div>
            @endif
            @if(session()->has("successDelete"))
            <div class="alert bg-blue ">
                {{session()->get("successDelete")}}
            </div>
            @endif
            @if(session()->has("error"))
            <div class="alert bg-red">
                {{session()->get("error")}}
            </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Liste des Réservations</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Créneau horaire</th>
                                        <th>Ordinateur</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Adresse mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                    <tr>
                                        <td>{{$reservation->reserv_date}}</td>
                                        <td>{{$reservation->creneau_horaire}}</td>
                                        <td>{{$reservation->ordi_libelle}}</td>
                                        <td class="text-uppercase">{{$reservation->visiteur_nom}}</td>
                                        <td class="text-capitalize">{{$reservation->visiteur_prenom}}</td>
                                        <td>{{$reservation->visiteur_mail}}</td>
                                        <td>
                                            <form action="{{ route('reservations.delete',$reservation->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <a href="" onclick="return confirm('Voulez-vous annuler cette réservation ?')">
                                                    <button type="submit" value="Supprimer" class="btn">
                                                        <i name="Supprimer" class="fas fa-window-close btn-supp"></i>
                                                    </button>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection