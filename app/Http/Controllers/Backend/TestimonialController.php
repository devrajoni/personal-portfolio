<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TestimonialFormRequest;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('backend.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('backend.testimonial.form');
    }

    public function store(TestimonialFormRequest $request)
    {
        Testimonial::create($request->persist());

        return redirect()->route('backend.testimonials.index')->flashify('created');
    }

    public function show($id)
    {
        //
    }

    public function edit(Testimonial $testimonial)
    {
        return view('backend.testimonial.form', compact('testimonial'));
    }

    public function update(TestimonialFormRequest $request, Testimonial $testimonial)
    {
        $testimonial->update($request->persist());

        return redirect()->route('backend.testimonials.index')->flashify('updated');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return back()->flashify('deleted');
    }
}
