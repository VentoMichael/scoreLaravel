@extends('layouts.app')
@section('content')
    <section>
    <h2>Matchs joués</h2>
    <table>
        <thead>
        <tr>
            <th>Date</th>
            <th>Équipe visitée</th>
            <th>Goals de l’équipe visitée</th>
            <th>Goals de l’équipe visiteuse</th>
            <th>Équipe visiteuse</th>
        </tr>
        </thead>
        <tbody class="teams">
        @foreach($matches as $match)
            <tr class="teams__list">
                <td class="teams__item">{{$match->played_at}}</td>
                <td class="teams__item">{{$match->home_team_name}}</td>
                <td class="teams__item">{{$match->home_team_goals}}</td>
                <td class="teams__item">{{$match->away_team_goals}}</td>
                <td class="teams__item">{{$match->away_team_name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <a href="/">Retour à l'accueil</a>
</section>
@endsection
