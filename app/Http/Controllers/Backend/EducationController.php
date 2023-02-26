<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Http\Requests\Backend\EducationFormRequest;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::latest()->get();

        return view('backend.education.index', compact('educations'));
    }

    public function create()
    {
        return view('backend.education.form');
    }

    public function store(EducationFormRequest $request)
    {
        Education::create($request->validated());

        return redirect()->route('backend.educations.index')->flashify('created');
    }

    public function show(Education $education)
    {
        //
    }

    public function edit(Education $education)
    {
        return view('backend.education.form', compact('education'));
    }

    public function update(EducationFormRequest $request, Education $education)
    {
        $education->update($request->validated());

        return redirect()->route('backend.educations.index')->flashify('updated');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return back()->flashify('deleted');
    }
}
