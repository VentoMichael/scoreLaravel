<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index(){
        $matches = Match::latest('date')->get();

        $teams = Team::all();
        return view('index', compact('matches','teams'));
    }
    public function show(Match $matches)
    {

    }
    public function create(){

    }
}
