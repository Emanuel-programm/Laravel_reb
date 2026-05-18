<?php

namespace App\Http\Controllers;
use Illuminate\View\View; // Add this line

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    public function index():View{
       $jobs = Job::latest()->limit(6)->get();

    return view('pages.home')->with('jobs', $jobs);


    }
}
