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
            {!! Form::email('email', null, [
                'class'         => 'form-control',
                'placeholder'   => 'Email'
            ]) !!}
        </div>
        <div class="form-group text-center">
            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    @else

    @endif

@endsection