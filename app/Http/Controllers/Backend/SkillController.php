<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SkillFormRequest;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::latest()->get();

        return view('backend.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('backend.skill.form');
    }

    public function store(SkillFormRequest $request)
    {
        Skill::create($request->validated());

        return redirect()->route('backend.skills.index')->flashify('created');
    }

    public function show(Skill $skill)
    {
        //
    }

    public function edit(Skill $skill)
    {
        return view('backend.skill.form', compact('skill'));
    }

    public function update(SkillFormRequest $request, Skill $skill)
    {
        $skill->update($request->validated());

        return redirect()->route('backend.skills.index')->flashify('updated');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return back()->flashify('deleted');
    }
}
