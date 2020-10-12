<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Mail\TeamAdded;
use App\Models\Team;
use App\Models\TeamStat;
use App\Providers\TeamCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        return view('teams.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        $teams = Team::all();
        return view('teams.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreTeamRequest $request)
    {
        $fileName = '';
        if ($request->hasFile('file_name')) {
            $fileName = $request->file_name->hashName();
            $request->file_name->storeAs('/images', $fileName);
            $image = Image::make($request->file_name);
            $image->resize(50, 70);
            $image->save(storage_path('app/public/images/' . '_50x50_' . $fileName));
        }
        $team = Team::create([
            'name' => $request->name,
            'slug' => mb_strtoupper(mb_substr($request->name, 0, 3)),
            'file_name' => $fileName,
        ]);
        TeamStat::create([
            'team_id' => $team->id,
        ]);


        event(new TeamCreated($team));

        return redirect(route('new_team'));
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
