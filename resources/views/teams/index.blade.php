@extends('layouts.app')
@section('content')
<h1>Voici la liste des équipes</h1>
<ul>
    @foreach($teams as $team)
        <li>{{$team->name}}</li>
    @endforeach
</ul>
@auth()
    @if(Auth::user()->is_administrator || Auth::user()->is_team_manager)
        <a href="teams/create">Envie d'en rajouter une autre ?</a>
    @endif
    <br>
    <a href="/">Retour à l'accueil</a>
@endauth
@endsection
