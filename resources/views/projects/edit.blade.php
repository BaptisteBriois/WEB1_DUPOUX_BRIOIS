@extends('layouts.app', ['pageTitle' => 'Editer un projet'])

@section('content')

    @include('partials.projects.form', ['action' => 'edit'])

@endsection