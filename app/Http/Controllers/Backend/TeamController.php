<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TeamFormRequest;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->get();

        return view('backend.team.index', compact('teams'));
    }

    public function create()
    {
        return view('backend.team.form');
    }

    public function store(TeamFormRequest $request)
    {
        Team::create($request->persist());

        return redirect()->route('backend.teams.index')->flashify('created');
    }

    public function show(Team $team)
    {
        //
    }

    public function edit(Team $team)
    {
        return view('backend.team.form', compact('team'));
    }

    public function update(TeamFormRequest $request, Team $team)
    {
        $team->update($request->persist());

        return redirect()->route('backend.teams.index')->flashify('updated');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return back()->flashify('deleted');
    }
}
