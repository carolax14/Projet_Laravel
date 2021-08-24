@extends('layout')

@section('content')

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Ordinateurs</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Acceuil</a></li>
        <li class="breadcrumb-item active">Ordinateurs - Liste</li>
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
                        <h3 class="h4">Liste des Ordinateurs</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Libelle</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ordinateurs as $ordinateur)
                                    <tr>
                                        <td>{{$ordinateur->id}}</td>
                                        <td class="text-capitalize">{{$ordinateur->ordi_libelle}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('ordinateurs.edit',$ordinateur->id) }}">
                                                    <button type="submit" value="Modifier" class="btn">
                                                        <i name="Modifier" class="fas fa-edit btn-edit"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('ordinateurs.delete',$ordinateur->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="" onclick="return confirm('Voulez-vous supprimer ce poste ?')">
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

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection