@extends('layouts.app', ['pageTitle' => 'Profil'])

@section('content')

    <div class="profil">
        <h3>Nom</h3>
        <p>{{$profil->name}}</p>

        <h3>Mail</h3>
        <p>{{$profil->email}}</p>
        <a href="profil/{{$profil->id}}/edit"><button class="btn btn-primary">Editer</button></a>
    </div>

@endsection