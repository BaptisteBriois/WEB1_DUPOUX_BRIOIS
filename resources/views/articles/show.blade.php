@extends('layouts.app', ['pageTitle' => 'Article n°'.$post->id])

@section('content')
    <h2>{{$post->title}}</h2>
    <h3>Auteur: {{ $post->user->name }}</h3>
    <p>{{$post->content}}</p>

@endsection