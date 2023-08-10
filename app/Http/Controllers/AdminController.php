<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    public function login()
    {

        $admin_email = Cookie::get('admin_email');
        $admin_password = Cookie::get('admin_password');

        if ($admin_email && $admin_password){
            Auth::guard('admin')->attempt(['email'=>$admin_email,'password'=>$admin_password]);
            return view('admin.dashboard');
        }
        return view('admin.admin_login');
    }

    public function store(Request $request)
    {

        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){

             Cookie::queue('admin_email',$request->email,60*60*7);
             Cookie::queue('admin_password',$request->password,60*60*7);

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

            Cookie::queue(Cookie::forget('admin_email'));
            Cookie::queue(Cookie::forget('admin_password'));

            return redirect()->route('admin.login');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function listBlogs()
    {
        return view('admin.list_blogs');
    }

    public function categories()
    {
        return view('admin.view_categories');
    }

    public function blogUsers()
    {
        return view('admin.users');
    }

    public function viewBlog($id)
    {
        return view('admin.view_blog');
    }
}
