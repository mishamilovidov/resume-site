<?php

namespace App\Http\Controllers;

use App\School;
use App\Club;
use App\Employer;
use App\Job;
use App\JobDescription;
use App\Award;
use App\Course;
use App\ProficientTechnicalSkill;
use App\ExperienceTechnicalSkill;
use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home ()
    {
        return view('pages.home');
    }

    public function resume ()
    {
        $schools = School::orderBy('schoolGraduationDate','desc')->get();
        $clubs = Club::orderBy('created_at','desc')->get();
        $employers = Employer::orderBy('employerStartDate', 'desc')->orderBy('employerName', 'asc')->get();
        $jobs = Job::orderBy('jobStartDate', 'desc')->get();
        $job_descriptions = JobDescription::orderBy('created_at','desc')->get();
        $awards = Award::orderBy('awardDate', 'desc')->get();
        $courses = Course::orderBy('courseID')->get();
        $proficient_technical_skills = ProficientTechnicalSkill::orderBy('ptsID')->get();
        $experience_technical_skills = ExperienceTechnicalSkill::orderBy('etsID')->get();

        return view('pages.resume', compact('employers','jobs','job_descriptions','schools','clubs','awards','courses','proficient_technical_skills','experience_technical_skills'));
    }

    public function about ()
    {
        return view('pages.about');
    }
    public function contact ()
    {
        return view('pages.contact');
    }
    
}
