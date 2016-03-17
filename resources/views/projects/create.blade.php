@extends('layouts.app', ['pageTitle' => 'Création d\'un projet])

@section('content')

    @include('partials.projects.form', ['action' => 'create'])
    @include('partials.projects.errors')

@endsection