@extends('layouts.app', ['pageTitle' => 'Profil'])

@section('content')

    <div class="profil">
        <h3>Nom</h3>
        <div class="form-group">
            <div class="form-control">{{$profil->name}}</div>
        </div>

        <h3>Mail</h3>
        <div class="form-group">
            <div class="form-control">{{$profil->email}}</div>
        </div>
        <a href="profil/{{$profil->id}}/edit"><button class="btn btn-primary">Editer</button></a>
    </div>

@endsection