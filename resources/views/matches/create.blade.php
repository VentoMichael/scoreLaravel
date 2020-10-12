@extends('layouts.app')
@section('content')
    <h1 class="container display-4">Ajouter un match</h1>
    @auth()
        @if(Auth::user()->isAdministrator)
            <form action="/match" method="post" class="container needs-validation mx-auto">
                @csrf
                <div class="form-group">
                    <label for="date">Date du match</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>

                {{-- Home --}}
                <div class="form-group">
                    <label for="home-team">Équipe à domicile</label>
                    <select name="home-team" id="home-team" class="custom-select">
                        @foreach($teams as $team)
                            <option value="{{$team->slug}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <a href="../teams/create">Équipe non listée ?</a>
                </div>
                <div class="form-group">
                    <label for="home-team-goals">Goals de l’équipe à domicile</label>
                    <input type="number" name="home-team-goals" id="home-team-goals">
                </div>


                {{-- Away --}}
                <div class="form-group">
                    <label for="away-team">Équipe visiteuse</label>
                    <select name="away-team" id="away-team" class="custom-select">
                        @foreach($teams as $team)
                            <option value="{{$team->slug}}">{{$team->name}}</option>
                        @endforeach
                    </select><br>
                </div>
                <div class="form-group">
                    <a href="../teams/create">Équipe non listée ?</a>
                </div>
                <div class="form-group">
                    <label for="away-team-goals">Goals de l’équipe visiteuse</label>
                    <input type="number" class="form-control" min="0" name="away-team-goals" id="away-team-goals">
                </div>

                <button class="btn btn-primary" type="submit">Ajouter ce match</button>
            </form>
        @else
            <p>Vous devez être administrateur</p>
        @endif
    @endauth
@endsection
