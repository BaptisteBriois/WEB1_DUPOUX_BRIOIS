@foreach($comments as $comment)
    @if($comment->post_id == $post->id)
    <p><strong>{{$comment->user->name}}</strong></p>
    <p>{{ $comment->content }}</p>
    <div class="text-center">
        @if(Auth::check() && (Auth::user()->id == $comment->user_id || Auth::user()->isAdmin))

            {!! Form::model($comment,
            array(
                'route' => array('comment.destroy', $comment->id),
                'method' => 'DELETE'))
            !!}
            <br>
            <a href="{{ route('comment.edit', $comment->id) }}" class="btn btn-warning">Modifier commentaire</a>
            {!! Form::submit('Supprimer commentaire', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
        @endif
    </div>
    @endif
@endforeach