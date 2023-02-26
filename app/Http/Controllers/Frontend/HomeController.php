<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HeroSection;
use App\Models\AboutSection;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Category;
use App\Models\Social;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['heroSection'] = HeroSection::first();

        $data['aboutSection'] = AboutSection::first();

        $data['skills'] = Skill::Where('status', 'Active')->get();

        $data['experiences'] = Experience::Where('status', 'Active')->get();

        $data['educations'] = Education::Where('status', 'Active')->get();

        $data['services'] = Service::Where('status', 'Active')->get();

        $data['teams'] = Team::Where('status', 'Active')->get();

        $data['testimonials'] = Testimonial::Where('status', 'Active')->get();

        $data['categorys'] = Category::Where('status', 'Active')->get();

        $data['projects'] = Project::Where('status', 'Active')->get();

        $data['socials'] = Social::get();

        return view('frontend.home', $data);
    }
}
