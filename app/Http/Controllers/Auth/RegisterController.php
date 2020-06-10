<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();
        if($request->file('resume')){
            $resumeCv = $request->file('resume');
            $resumeCvSaveAsName = time().'.'. $resumeCv->getClientOriginalExtension();
            $upload_path = 'resume/';
            $profile_resume_url = $upload_path . $resumeCvSaveAsName;
            $success = $resumeCv->move($upload_path, $resumeCvSaveAsName);

            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'resume' => $profile_resume_url,
                'phone' => $data['phone'],
                'qualification' => $data['qualification'],
                'total_experience' => $data['total_experience'],
                'user_type' => 'employee'
            ]);
        }else{

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'resume' => null,
                'phone' => null,
                'qualification' => null,
                'total_experience' => null,
                'user_type' => 'employer'
            ]);

            $UserId = $user->id;

            \DB::table('role_user')->insert(
                ['user_id' => $UserId, 'role_id' => 2]
            );


            return $user;
        }

        
    }
    public function showRegistrationForm(Request $request) {
        $skills = ['php','html'];
        if($request->t == 2){
            return view ('auth.candidate');   
        }
        return view ('auth.register')->with('skills',$skills);
    }
}
