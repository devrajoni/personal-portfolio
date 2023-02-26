<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Team;
use App\Models\Project;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $data['totalService'] = Service::count();

        $data['totalTeam'] = Team::count();

        $data['totalProject'] = Project::count();

        $data['totalTestimonial'] = Testimonial::count();

        return view('backend.dashboard', $data);
    }
}
