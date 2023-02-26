<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\Backend\ServiceFormRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        return view('backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('backend.service.form');
    }

    public function store(ServiceFormRequest $request)
    {
        Service::create($request->validated());

        return redirect()->route('backend.services.index')->flashify('created');
    }

    public function show(Service $service)
    {
        //
    }

    public function edit(Service $service)
    {
        return view('backend.service.form', compact('service'));
    }

    public function update(ServiceFormRequest $request, Service $service)
    {
        $service->update($request->validated());

        return redirect()->route('backend.services.index')->flashify('updated');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return back()->flashify('deleted');
    }
}
