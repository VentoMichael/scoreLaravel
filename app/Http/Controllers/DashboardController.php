<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Participation;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $teams = Team::all();
        $matches = Match::with('teams')->get();
        $participations = Participation::all();
        return view('dashboard', compact('teams','participations','matches'));
    }
}
