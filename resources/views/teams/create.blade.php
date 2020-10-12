@extends('layouts.app')
@section('content')
    <h1 class="display-4 text-center m-5">Ajouter une équipe</h1>
    @if(isset($teams))
    <ul>
        @foreach($teams as $team)
            <li>
                <img src="{{asset('images/' . '_50x50_'.$team->file_name)}}" alt="">
                {{$team->name}} : {{$team->slug}}</li>
        @endforeach
    </ul>
    @else
        <p>
            Pas d'équipe
        </p>
    @endif
    @auth()
        @if(Auth::user()->is_administrator || Auth::user()->is_team_manager)
            <form style="width: 350px" action="/team" method="post" class="col-sm needs-validation mx-auto" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nouvelle équipe</label>
                    <input type="text" id="name" name="name">
                    @error('name')
                    <p class="alert-danger">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Son slug</label>
                    <input type="text" id="slug" class="form-control" name="slug"><br>
                    @error('slug')
                    <p class="alert-danger">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="file_name">Son logo</label>
                    <input type="file" id="file_name" name="file_name"><br>
                    @error('file_name')
                    <p class="alert-danger">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter ce match</button>

            </form>
        @endif
    @endauth
@endsection
