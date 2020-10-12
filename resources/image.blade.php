@extends('layouts.app')
@section('content')
    <h1>Ajouter un match</h1>
    @auth()
        @if(Auth::user()->isAdministrator)
            <form action="/imgs" method="post" enctype="multipart/form-data">
                @csrf
                <label for="image">Date du match</label>
                <input type="file" id="image" name="image">
                <br>
                <br>

                <button type="submit">Ajouter ce match</button>
            </form>
        @else
            <p>Vous devez être administrateur</p>
        @endif

    @endauth
    @if(!is_null($imageName))
    <div>
        <img src="{{asset('images/'.$imageName)}}" alt="">
    </div>
    @endif
@endsection
