@extends('layouts.app', ['pageTitle' => 'Éditer votre commentaire')

@section('content')
    {!! Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) !!}
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                {!! Form::text('content', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Message...'
                ]) !!}
            </div>
        </div>

        <div class="col-md-2">
            {!! Form::submit('Envoyer', ['class' => 'btn btn-block btn-success']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection