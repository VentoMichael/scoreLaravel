<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $withCount = ['matches'];

    public function matches()
    {
        return $this->belongsToMany('App\Models\Match', 'participations')->withPivot('is_home', 'goals');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = strtoupper($value);
    }

    public function getGoalsForAttribute()
    {
        return $this->matches->sum(function ($match) {
            return $match->pivot->goals;
        });
    }
}
