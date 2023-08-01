<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.admin_login');
    }

    public function store(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.dashboard');
        }
        else{
            return view('admin.admin_login')->with('error','Invalid credentials');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();

            return redirect()->route('admin.login');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
