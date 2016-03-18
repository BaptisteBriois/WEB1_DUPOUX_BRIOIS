@extends('layouts.app', ['pageTitle' => 'Projet "'.$project->project_name.'"'])

@section('content')
    <h3>Nom du commanditaire</h3>
    <p>{{$project->author_name}}</p>

    <h3>Adresse du commanditaire</h3>
    <p>{{$project->author_address}}</p>

    <h3>Adresse mail du commanditaire</h3>
    <p>{{$project->author_email}}</p>

    <h3>Téléphone du commenditaire</h3>
    <p>{{$project->author_phone}}</p>

    <h3>Nom du contact du commenditaire</h3>
    <p>{{$project->contact_name}}</p>

    <h3>Adress du contact du commenditaire</h3>
    <p>{{$project->contact_address}}</p>

    <h3>Email du contact du commenditaire</h3>
    <p>{{$project->contact_email}}</p>

    <h3>Téléphone du contact du commenditaire</h3>
    <p>{{$project->contact_phone}}</p>

    <h3>La carte d'identité</h3>
    <p>{{$project->identity_card}}</p>

    <h3>La catégorie</h3>
    <p>{{$project->category}}</p>

    <h3>Le contexte</h3>
    <p>{{$project->context}}</p>

    <h3>La demande</h3>
    <p>{{$project->application}}</p>

    <h3>Les objectifs</h3>
    <p>{{$project->goals}}</p>

    <h3>Infomations</h3>
    <p>{{$project->infomations}}</p>





@endsection

