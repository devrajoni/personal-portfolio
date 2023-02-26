<?php

namespace App\Http\Controllers\Backend;

use App\Models\AboutSection;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AboutSectionFormRequest;

class AboutSectionController extends Controller
{
    public function create()
    {
        $aboutSection = AboutSection::first();

        return view('backend.about.form', compact('aboutSection'));
    }

    public function store(AboutSectionFormRequest $request)
    {
        AboutSection::create($request->persist());

        return redirect()
            ->route('backend.about-sections.create')
            ->flashify('created');
    }

    public function update(AboutSectionFormRequest $request, AboutSection $aboutSection)
    {
        $aboutSection->update($request->persist());

        return redirect()
            ->route('backend.about-sections.create')
            ->flashify('updated');
    }
}
