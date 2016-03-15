@extends('layouts.app', ['pageTitle' => 'Articles'])

@section('content')
    @if(Session::has('erreur'))
        <h2>{{Session::get('erreur')}}</h2>

        <hr>
    @endif

    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{$post->content}}</p>
        <a href="{{route('articles.show', $post->id)}}">
            <button>Voir l'article</button>
        </a>

        @if(Auth::check() && Auth::user()->id == $post->user_id)
        <a href="{{route('articles.edit', $post->id)}}">
            <button>Editer l'article</button>
        </a>
        <form action="{{route('articles.destroy', $post->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button>Supprimer l'article</button>
        </form>
        @endif

        <hr>

    @endforeach

@endsection