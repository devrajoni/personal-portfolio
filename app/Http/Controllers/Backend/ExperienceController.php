<?php

namespace App\Http\Controllers\Backend;

use App\Models\Experience;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ExperienceFormRequest;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();

        return view('backend.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('backend.experience.form');
    }

    public function store(ExperienceFormRequest $request)
    {
        Experience::create($request->validated());

        return redirect()
            ->route('backend.experiences.index')
            ->flashify('created');
    }

    public function show(Experience $experience)
    {
        //
    }

    public function edit(Experience $experience)
    {
        return view('backend.experience.form', compact('experience'));
    }

    public function update(ExperienceFormRequest $request, Experience $experience)
    {
        $experience->update($request->validated());

        return redirect()->route('backend.experiences.index')->flashify('updated');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return back()->flashify('deleted');
    }
}
