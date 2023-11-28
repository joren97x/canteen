<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function all_students() {
        return view('admin.all-students', ['students' => User::where('role', 'student')->get()]);
    }

    public function all_admins() {
        return view('admin.all-admins', ['admins' => User::where('role', 'admin')->get()]);
    }
}
