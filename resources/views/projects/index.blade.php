@extends('layouts.app', ['pageTitle' => 'Projets'])

@section('content')
    <a href="{{route('projets.create')}}">
        <button class="btn btn-success"><span class="fa fa-plus"><span> Soumettre un projet</button>
    </a>

    @if(Session::has('erreur'))
        <h2>{{Session::get('erreur')}}</h2>

        <hr>
    @endif

    @foreach($project as $projet)
        <h3>{{$projet->project_name}}</h3>
        <p>{{$projet->application}}</p>
        <a href="{{route('projets.show', $projet->id)}}">
            <button class="btn btn-info">Voir le projet</button>
        </a>

        @if(Auth::check() && Auth::user()->id == $projet->user_id || Auth::check() && Auth::user()->admin == 1)
            <a href="{{route('projets.edit', $projet->id)}}">
                <button class="btn btn-primary">Editer le projet</button>
            </a>
            <form action="{{route('projets.destroy', $projet->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger">Supprimer le projet</button>
            </form>
        @endif

        <hr>

    @endforeach

@endsection