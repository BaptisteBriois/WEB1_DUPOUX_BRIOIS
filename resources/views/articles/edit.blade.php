@extends('layouts.app', ['pageTitle' => 'Editer l\'article n°'.$post->id])

@section('content')

    @include('partials.articles.form', ['action' => 'edit'])
    @include('partials.articles.errors')

@endsection