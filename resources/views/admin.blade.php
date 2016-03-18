@extends('layouts.app', ['pageTitle' => 'Page d\'administration'])

@section('content')

    @foreach($projects as $project)
        <h3>Nom du projet</h3>
        <p>{{$project->project_name}}</p>
        <h3>Demande</h3>
        <p>{{$project->application}}</p>
        <div class="col-md-4">
            <a href="{{route('projets.show', $project->id)}}">
                <button class="btn btn-info">Voir le projet</button>
            </a>
        </div>
        <div class="col-md-4">
            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
            {!! Form::hidden('status', 1) !!}
            {!! Form::submit('Valider le projet', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-4">
            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
            {!! Form::hidden('status', 2) !!}
            {!! Form::submit('Refuser le projet', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    @endforeach

@endsection