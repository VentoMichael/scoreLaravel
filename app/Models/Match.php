<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;



    public function teams()
    {
        return $this->belongsToMany('App\Models\Team', 'participations')->withPivot('goals','is_home');
    }

    public function getHomeTeamNameAttribute()
    {
        return $this->teams->filter(function ($team){
            return $team->pivot->is_home === 1;
        })->first()->name;
    }

    public function getAwayTeamNameAttribute()
    {
        return $this->teams->filter(function ($team){
            return $team->pivot->is_home === 0;
        })->first()->name;
    }

    public function getAwayTeamGoalsAttribute()
    {
        return $this->teams->filter(function ($team){
            return $team->pivot->is_home === 0;
        })->first()->pivot->goals;
    }
    public function getHomeTeamGoalsAttribute()
    {
        return $this->teams->filter(function ($team){
            return $team->pivot->is_home === 1;
        })->first()->pivot->goals;
    }
}
