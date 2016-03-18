@extends('layouts.app', ['pageTitle' => 'Conatct'])

@section('content')

{!! Form::open() !!}

<div class="form-group">
    {!! Form::email('email', null, [
    'class' => 'form-control',
    'placeholder' => 'Email du destinataire'
    ]) !!}
</div>

<div class="form-group">
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Nom de l\'article'
    ]) !!}
</div>

<div class="form-group">
    {!! Form::textarea('content', null, [
    'class' => 'form-control',
    'placeholder' => 'Message'
    ]) !!}
</div>

<div class="text-center">
    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection