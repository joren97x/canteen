<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
