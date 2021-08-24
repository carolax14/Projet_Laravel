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
        <li class="breadcrumb-item active">Ordinateurs - Modifier</li>
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
                        <h3 class="h4">Modifier un ordinateur</h3>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <form action="{{ route('ordinateurs.update',$ordinateur->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3 form-group">
                                <label class="form-label">Libelle</label>
                                <input type="hidden" name="id" value="{{$ordinateur->id}}" class="form-control text-uppercase">
                                <input type="text" name="ordi_libelle" value="{{$ordinateur->ordi_libelle}}" placeholder="Libelle..." class="form-control">
                            </div>
                            <div class="mb-3 form-group">
                                <button type="submit" value="Modifier" name="Modifier" class="btn btn-primary">Modifier</button>
                                <button name="Retour" class="btn btn-danger"><a href="{{ route('ordinateurs.liste') }}">Retour</a></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection