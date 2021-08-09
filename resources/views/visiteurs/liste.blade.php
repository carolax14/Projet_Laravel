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
        <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
        <li class="breadcrumb-item active">Visiteurs - Liste</li>
    </ul>
</div>
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            @if(session()->has("successDelete"))
            <div class="alert bg-red">
                {{session()->get("successDelete")}}
            </div>
            @endif
            @if(session()->has("successUpdate"))
            <div class="alert bg-green">
                {{session()->get("successUpdate")}}
            </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Liste des Visiteurs</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Adresse mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($visiteurs as $visiteur)
                                    <tr>
                                        <td class="text-uppercase">{{$visiteur->visiteur_nom}}</td>
                                        <td class="text-capitalize">{{$visiteur->visiteur_prenom}}</td>
                                        <td>{{$visiteur->visiteur_mail}}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a href="{{ route('visiteurs.edit',$visiteur->id) }}">
                                                    <button type="submit" value="Modifier" class="btn">
                                                        <i name="Modifier" class="fas fa-edit btn-edit"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('visiteurs.delete',$visiteur->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="" onclick="return confirm('Voulez-vous supprimer cet utilisateur ?')">
                                                        <button type="submit" value="Supprimer" class="btn">
                                                            <i name="Supprimer" class="fas fa-trash-alt btn-supp"></i>
                                                        </button>
                                                    </a>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <!--  </form> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection