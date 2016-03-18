@if($action == 'edit')
    {!! Form::model($project, ['route' => ['projets.update', $project->id], 'method' => 'PUT']) !!}
@else
    {!! Form::open(['route' => 'projets.store', 'method' => 'POST']) !!}
@endif

<div class="form-group">
    {!! Form::label('project_name', 'Nom du projet') !!}
    {!! Form::text('project_name', null, [
        'class' => 'form-control',
        'placeholder' => 'Nom du projet'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('author_name', 'Nom, prénom et fonction du commanditaire') !!}
    {!! Form::text('author_name', null, [
        'class' => 'form-control',
        'placeholder' => 'Nom, prénom et fonction'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('author_address', 'Adresse du commanditaire') !!}
    {!! Form::text('author_address', null, [
        'class' => 'form-control',
        'placeholder' => 'Adresse'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('author_email', 'Adresse email du commanditaire') !!}
    {!! Form::email('author_email', null, [
        'class' => 'form-control',
        'placeholder' => 'Adresse email'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('author_phone', 'Numéro de téléphone du commanditaire') !!}
    {!! Form::text('author_phone', null, [
        'class' => 'form-control',
        'placeholder' => 'Numéro de téléphone'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('contact_name', 'Nom, prénom et fonction du contact') !!}
    {!! Form::text('contact_name', null, [
        'class' => 'form-control',
        'placeholder' => 'Nom, prénom et fonction'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('contact_address', 'Adresse du contact') !!}
    {!! Form::text('contact_address', null, [
        'class' => 'form-control',
        'placeholder' => 'Adresse'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('contact_email', 'Adresse email du contact') !!}
    {!! Form::email('contact_email', null, [
        'class' => 'form-control',
        'placeholder' => 'Adresse email'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('contact_phone', 'Numéro de téléphone du contact') !!}
    {!! Form::text('contact_phone', null, [
        'class' => 'form-control',
        'placeholder' => 'Numéro de téléphone'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('identity_card', "Fiche d'identité") !!}
    {!! Form::textarea('identity_card', null, [
        'class' => 'form-control',
        'placeholder' => 'Expérience'
        ])
    !!}
</div>

<div class="form-group">
    {{ Form::label('Site internet', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'web') }}
    {{ Form::label('3D', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', '3D') }}
    {{ Form::label('Animation 2D', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', '2D') }}
    {{ Form::label('Installation multimédia', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'multimedia') }}
    {{ Form::label('Jeux vidéos', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'JV') }}
    {{ Form::label('DVD', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'DVD') }}
    {{ Form::label('Print', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'print') }}
    {{ Form::label('CD', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'CD') }}
    {{ Form::label('Evenement', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'evenement') }}
    {{ Form::label('Autre', null, ['class' => 'control-label']) }}
    {{ Form::radio('category', 'autre') }}
</div>

<div class="form-group">
    {!! Form::label('context', "Contexte du projet") !!}
    {!! Form::textarea('context', null, [
        'class' => 'form-control',
        'placeholder' => 'Contexte'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('application', "Demandes pour le projet") !!}
    {!! Form::textarea('application', null, [
        'class' => 'form-control',
        'placeholder' => 'Demandes'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('goals', "Objectifs du projet") !!}
    {!! Form::textarea('goals', null, [
        'class' => 'form-control',
        'placeholder' => 'Objectifs'
        ])
    !!}
</div>

<div class="form-group">
    {!! Form::label('informations', "Contraintes et informations supplémentaires pour le projet") !!}
    {!! Form::textarea('informations', null, [
        'class' => 'form-control',
        'placeholder' => 'Contraintes et informations supplémentaires'
        ])
    !!}
</div>

<div class="text-center">
    {!! Form::submit('Soumettre',
        ['class' => 'btn btn-primary'])
    !!}
</div>

{!! Form::close() !!}