<div class="container mt-5">
    <h1 class="display-5">Classement du championnat</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>&nbsp;</th>
            <th scope="col">Logo</th>
            <th scope="col">Team</th>
            <th scope="col">Games</th>
            <th scope="col">Points</th>
            <th scope="col">Wins</th>
            <th scope="col">Losses</th>
            <th scope="col">Draws</th>
            <th scope="col">GF</th>
            <th scope="col">GA</th>
            <th scope="col">GD</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td><img class="rounded" src="{{asset('images/' . '_50x50_'.$team->file_name)}}" alt=""></td>
                <th scope="row">{{$team->slug}}</th>
                <td>{{$team->games}}</td>
                <td>{{$team->points}}</td>
                <td>{{$team->wins}}</td>
                <td>{{$team->losses}}</td>
                <td>{{$team->draws}}</td>
                <td>{{$team->goals_for}}</td>
                <td>{{$team->goals_against}}</td>
                <td>{{$team->goals_difference}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
