{!! Form::open(['route' => 'comment.store', 'method' => 'POST']) !!}
<div class="row">
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::hidden('post_id', $post->id) !!}
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