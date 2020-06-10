<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use \Auth;
use DateTime;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    public function index()
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')->where('status',1)
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();

        return view('index', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));
    }

    public function search(Request $request)
    {
        $jobs = Job::with('company')->where('jobs.status',1)
            ->searchResults()
            ->paginate(7);

        $banner = 'Search results';

        return view('jobs.index', compact(['jobs', 'banner']));
    }


    public function postLogin(){
        if(Auth::user()->user_type == "employee"){
            return redirect('/');
        }else{
            return redirect('/admin');
        }
    }

    public function email($toUserDetail, $subject, $content) {
        try {

            Mail::send ('layouts.email', [ 'content' => $content ], function ($message) use ($subject, $toUserDetail) {
                $message->from ('portaljoblisting@gmail.com');
                $message->to ($toUserDetail['email_id'], $toUserDetail['name'])->subject ($subject);
            } );
        }
        catch ( \Exception $e ) {
            app ( 'log' )->info ($e->getMessage());
            app ( 'log' )->info ( 'Email is not working with configured mail id ' . env ( 'MAIL_USERNAME' ) );
        }
    }


    public function emailToAdmin($toUserDetail, $subject, $content) {
        try {
            Mail::send ('layouts.email', [ 'content' => $content ], function ($message) use ($subject, $toUserDetail) {
                $message->from ('portaljoblisting@gmail.com');
                $message->to ($toUserDetail['email_id'], $toUserDetail['name'])->subject ($subject);
                $message->attach(public_path(), [
                    'as' => $toUserDetail['attachment'],
                    'mime' => 'application/pdf',
                ]);
            } );
        }
        catch ( \Exception $e ) {
            app ( 'log' )->info ($e->getMessage());
            app ( 'log' )->info ( 'Email is not working with configured mail id ' . env ( 'MAIL_USERNAME' ) );
        }
    }



    public function applyJobs(Request $request){
       $jobId = $request->message['jobId'];
       $candidateId = $request->message['userId'];
        $created_at = new DateTime();
       \DB::table('job_users')->insert(
        ['user_id' => $candidateId, 'job_id' => $jobId,'created_at'=>$created_at,'updated_at'=>$created_at]
        );

       $appliedJob = Job::where('id', $jobId)->firstorfail();

       $jobPostedUserId = $appliedJob->user_id;

       $candidateUserInfo = User::where('id',$candidateId)->firstorfail();
    
       $jobPostedUserInfo = User::where('id',$jobPostedUserId)->firstorfail();

       $subjectToCandidate = "Job Listing - Job Status";

       $temPlateForCandidate = "Hi Mr/Miss/Mrs ##NAME##, 
        <br><br>
        You have applied for the job titled as ##TITLE## , is accepted for profile review.
        <br><br>
        We wish you the best of luck for your career.
        <br><br>
        <br><br>
        Thank you,
        <br>
        Joblisting
        ";

       $stringToReplaceCandidateTemplate = [ '##NAME##', '##TITLE##'];
       $valueToReplaceAdminTemplate = [ $candidateUserInfo->name , $appliedJob->title ];
       
       $contentToCandidate = str_replace ( $stringToReplaceCandidateTemplate, $valueToReplaceAdminTemplate,$temPlateForCandidate);

       $candidateUserDetail = array('email_id' => $candidateUserInfo->email, 'name' => $candidateUserInfo->name);


       $subjectToJobOwner = "Job Listing - New application";
       $contentToJobOwner =  'Mr.' . $candidateUserInfo->name . " " .'have applied for the job titled as' . ' ' . $appliedJob->title . "  " . "Please find his cv in attachment. Thank You";
       $jobOwnerUserDetail = array('email_id' => $jobPostedUserInfo->email, 'name' => $jobPostedUserInfo->name, 'attachment' => $candidateUserInfo->resume);

       $this->email($candidateUserDetail, $subjectToCandidate , $contentToCandidate);
       $this->emailToAdmin($jobOwnerUserDetail, $subjectToJobOwner , $contentToJobOwner);


       return response()->json(['success' => 'success'], 200);
    }

    public function getProfile()
    {   
        $user = Auth::user();
        return view('auth.profile')->with(['user'=>$user]);
    }
    public function updateProfile(Request $request)
    {
        if($request->file('resume') && !$request->resumeChanges){
            $resumeCv = $request->file('resume');
            $resumeCvSaveAsName = time().'.'. $resumeCv->getClientOriginalExtension();
            $upload_path = 'resume/';
            $profile_resume_url = $upload_path . $resumeCvSaveAsName;
            $success = $resumeCv->move($upload_path, $resumeCvSaveAsName); 
        }else{
            $profile_resume_url = $request->oldResume;
        }
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->resume = $profile_resume_url;
        $user->phone = $request->phone;
        $user->qualification = $request->qualification;
        $user->total_experience = $request->total_experience;
        $user->save();
        return redirect("/");
    }
}
