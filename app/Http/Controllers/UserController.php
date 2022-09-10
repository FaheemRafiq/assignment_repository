<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function feedback(Request $request){
        $request->validate([
            'email' => 'required|email',
            'comment' => 'required'
        ]);
        $feedback = new feedback;
        $feedback->fullname = $request['fullname'];
        $feedback->email = $request['email'];
        $feedback->comment = $request['comment'];
        $feedback->save();

        $request->session()->flash('Submit_success', 'Submitted Successfully!');
        return redirect('/contact');

    }
    public function register(Request $request)
    {
        $check = UserData::where([
            ['email', '=', $request['email']]
        ])->first();
        if ($check) {
            $request->session()->flash('email_error', 'Email already taken');
            return redirect('/signup');
        } else {
            $request->validate([
                'fullname' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]);
            $user = new UserData;
            $user->fullname = $request['fullname'];
            $user->email = $request['email'];
            $user->password = $request['password'];
            $user->confirm_password = $request['confirm_password'];
            $user->save();

            return redirect('/signin');
        }
    }
    public function signIn(Request $request)
    {
        $email =  $request['email'];
        $user = DB::table('userdata')->where('email', $email)->first();
        if ($user === NULL) {
            $request->session()->flash('user_err', 'User not registered');
            return redirect('/signin');
        }
        elseif ($user->password === $request['password']) {
            $name = $user->fullname;
            $data = compact('name');
            return redirect('/')->with($data);
        } else {
            $request->session()->flash('password_err', 'Incorrect Password');
            return redirect('/signin');
        }
    }
}
