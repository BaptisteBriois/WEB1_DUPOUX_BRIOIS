@extends('layouts.app', ['pageTitle' => 'Profil'])

@section('content')

    @if(Auth::user()->id == $profil->id)
        {!! Form::model($profil, ['route' => ['profil.update', $profil->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::text('name', null, [
                'class'         => 'form-control',
                'placeholder'   => 'Nom'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::text('email', null, [
                'class'         => 'form-control',
                'placeholder'   => 'Email'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Envoyer', ['class' => 'btn btn-block btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    @else
        {{ return view('home') }}
    @endif

@endsection