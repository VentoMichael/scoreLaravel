<section class="container mt-5">
    <h2 class="display-5">Matchs joués au </h2>
    <table class="table table-striped mx-auto">
        <thead class="thead-dark">
        <tr>
            <th>Date</th>
            <th>Équipe visitée</th>
            <th>Goals de l’équipe visitée</th>
            <th>Goals de l’équipe visiteuse</th>
            <th>Équipe visiteuse</th>
        </tr>
        </thead>
        <tbody class="teams">
        @if(isset($matches))
            @foreach($matches as $match)
                <tr class="teams__list">
                    <td class="teams__item">{{\Carbon\Carbon::createFromDate($match->played_at)->format('d/m/Y')}}</td>
                    <td class="teams__item">{{$match->home_team_name}}</td>
                    <td class="teams__item">{{$match->home_team_goals}}</td>
                    <td class="teams__item">{{$match->away_team_goals}}</td>
                    <td class="teams__item">{{$match->away_team_name}}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>
                    Pas de matchs
                </td>
            </tr>
        @endif
        </tbody>
    </table>

</section>
