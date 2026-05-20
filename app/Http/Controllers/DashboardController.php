<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){


    // Get authenticated user
    $user=Auth::user();


        // Get all jobs for the authenticated user
        $jobs = Job::where('user_id', $user->id)->get();

        return view('dashboard.index',compact('jobs','user'));

    }
}
