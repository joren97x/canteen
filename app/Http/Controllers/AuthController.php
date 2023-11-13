<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    //
    public function sign_up(Request $request) {
        $user = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);
        
        User::create($user);
        return redirect('/sign-in');

    }

    public function sign_in(Request $request) {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($user)) {
            Auth::login(User::where('email', $user['email'])->first());
            return redirect('/');
        }
        return back()->withErrors(['loginError' => 'Invalid credentials']);
    }

    public function student_sign_up() {
        return view('student-sign-up');
    }

    public function admin_sign_up() {
        return view('admin-sign-up');
    }

    public function student_sign_in() {
        return view('student-sign-in');
    }

    public function admin_sign_in() {
        return view('admin-sign-in');
    }

    public function student_store(Request $request) {
        dd($request);
    }

    public function admin_store(Request $request) {
        dd($request);
    }

}
