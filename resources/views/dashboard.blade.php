@extends('layouts.app')
@section('content')
    <x-standing :teams="$teams"></x-standing>

<x-matchplayed :matches="$matches"></x-matchplayed>

    @canany(['add-matches', 'add-teams'])
        <nav class="container mt-5">
            <h2 class="display-5">Administation des matches et équipes</h2>
            <ul class="list-group">
                @can('add-matches')
                    <li class="nav-item"><a class="nav-link" href="{{route('new_match')}}">Ajouter un match</a></li>
                @endcan
                @can('add-teams')
                    <li class="nav-item"><a class="nav-link" href="{{route('new_team')}}">Ajouter une équipe</a></li>
                @endcan
            </ul>
        </nav>
    @endcanany
@endsection
