<?php

namespace App\Http\Controllers\Backend;

use App\Models\Project;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProjectFormRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->latest()->get();

        return view('backend.project.index', compact('projects'));
    }

    public function create()
    {
        $categories = Category::get();

        return view('backend.project.form', compact('categories'));
    }

    public function store(ProjectFormRequest $request)
    {
        Project::create($request->persist());

        return redirect()->route('backend.projects.index')->flashify('created');
    }

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        $categories = Category::get();

        return view('backend.project.form', compact('project', 'categories'));
    }

    public function update(ProjectFormRequest $request, Project $project)
    {
        $project->update($request->persist());

        return redirect()->route('backend.projects.index')->flashify('updated');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return back()->flashify('deleted');
    }
}
