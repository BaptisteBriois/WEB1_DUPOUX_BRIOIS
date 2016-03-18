@extends('layouts.app', ['pageTitle' => 'Page d\'administration'])

@section('content')

    <div class="col-md-4">
        <h2>En attente</h2>
    @foreach($projects as $project)
        @if($project->status == 0)
            <h3>Nom du projet</h3>
            <p>{{$project->project_name}}</p>
            <h3>Demande</h3>
            <p>{{$project->application}}</p>
                <div class="col-md-2">
                    <a href="{{route('projets.show', $project->id)}}">
                        <button class="btn btn-info">Voir</button>
                    </a>
                </div>
            <div class="col-md-2 col-md-offset-1">
                {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('status', 1) !!}
                {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
            <div class="col-md-2 col-md-offset-1">
                {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('status', 2) !!}
                {!! Form::submit('Refuser', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
            <br>
            @endif
    @endforeach
    </div>

    <div class="col-md-4">
        <h2>Acceptés</h2>
        @foreach($projects as $project)
            @if($project->status == 1)
                <h3>Nom du projet</h3>
                <p>{{$project->project_name}}</p>
                <h3>Demande</h3>
                <p>{{$project->application}}</p>
                <div class="col-md-2">
                    <a href="{{route('projets.show', $project->id)}}">
                        <button class="btn btn-info">Voir</button>
                    </a>
                </div>
                <div class="col-md-2 col-md-offset-1">
                    {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                    {!! Form::hidden('status', 2) !!}
                    {!! Form::submit('Refuser', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
                <br>
            @endif
        @endforeach
    </div>

    <div class="col-md-4">
        <h2>Refusés</h2>
        @foreach($projects as $project)
            @if($project->status == 2)
                <h3>Nom du projet</h3>
                <p>{{$project->project_name}}</p>
                <h3>Demande</h3>
                <p>{{$project->application}}</p>
                <div class="col-md-2">
                    <a href="{{route('projets.show', $project->id)}}">
                        <button class="btn btn-info">Voir</button>
                    </a>
                </div>
                <div class="col-md-2 col-md-offset-1">
                    {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                    {!! Form::hidden('status', 1) !!}
                    {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                <br>
            @endif
        @endforeach
    </div>

@endsection