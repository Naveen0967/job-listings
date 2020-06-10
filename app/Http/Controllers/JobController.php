<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\JobUser;
class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')->where('status',1)
            ->paginate(7);

        $banner = 'Jobs';

        return view('jobs.index', compact(['jobs', 'banner']));
    }

    public function show(Job $job)
    {   
        if(\Auth::user()){
            $user = JobUser::where('job_id', $job->id)->where('user_id', \Auth::user()->id)->first();

            if (!empty($user->job_id)) {
                $job->isApplied = true;
            } else {
                $job->isApplied = false;
            }
        }else{
            $job->isApplied = false;
        }  
        
        $job->load('company');
        
        return view('jobs.show', compact('job'));
    }
}
