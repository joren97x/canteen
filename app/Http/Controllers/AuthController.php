<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //store student
    public function store(Request $request) {
        $user = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        User::create($user);
        if($user['role'] == "admin") {
            return redirect('/admin/sign-in');
        }
        else {
            return redirect('/student/sign-in');
        }

    }

    public function login(Request $request) {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        if(Auth::attempt($user)) {
            if($user['role'] == "admin") {
                return redirect('/admin/add-food');
            }
            else {
                return redirect('/student/food-zone');
            }
        }
        return back()->withErrors(['loginError' => 'Invalid credentials']);
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
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

    

    
}
