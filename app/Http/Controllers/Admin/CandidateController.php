<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobRequest;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Job;
use App\Location;
use App\JobUser;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\User;

class CandidateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $candidates = JobUser::get()->toArray();
        $userId = Auth::user()->id;
        if(is_array($candidates)){
            $i = 0;
            $applyedJobs = [];
            foreach($candidates as $candidate){
                $jobs = Job::where('id',$candidate['job_id'])->where('user_id',$userId)->first();
                $user = User::where('id',$candidate['user_id'])->first();
                if($jobs){
                    $temp['id'] = $i +1;
                    $temp['jobTitle'] =$jobs->title;
                    $temp['CandidateName'] = $user->name;
                    $temp['email'] = $user->email;
                    $temp['phone'] = $user->phone;
                    $temp['date'] = $candidate['created_at'];
                    $temp['resume'] = $user->resume;
                    $applyedJobs[$i] = $temp;
                }
                $i++;
            }
            // dd($applyedJobs);
        }
        return view('admin.candidates.index', compact('applyedJobs',$applyedJobs));
    }
}
