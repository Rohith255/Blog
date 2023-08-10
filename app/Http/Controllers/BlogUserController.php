<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogUserLoginRequest;
use App\Http\Requests\BloguserRequest;
use App\Models\BlogUser;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class BlogUserController extends Controller
{
    public function login()
    {
        $cookie_email = Cookie::get('blog_user_email');
        $cookie_password = Cookie::get('blog_user_passcode');

        if (!empty($cookie_email) && !empty($cookie_password && Auth::guard('user')->attempt(['email'=>$cookie_email,'password'=>$cookie_password]))){
                return redirect()->route('blog-user.profile');
        }
        else{
            return view('blog_user.login');
        }
    }

    public function store(BlogUserLoginRequest $blogUserLoginRequest)
    {

        $credentials = $blogUserLoginRequest->validated();

        if ($credentials){

            if (!empty($credentials['remember_me'])){
                Cookie::queue('$blog_user_email',$blogUserLoginRequest->email,60*60*2);
                Cookie::queue('blog_user_passcode',$blogUserLoginRequest->password,60*60*2);
            }

            if (Auth::guard('user')->attempt(['email'=>$blogUserLoginRequest->email,'password'=>$blogUserLoginRequest->password])){
                return redirect()->route('blog-user.profile');
            }
        }

        return redirect()->back()->with('invalid','Invalid Credentials');
    }

    public function register(Request $request)
    {
        return view('blog_user.register');
    }
    public function submit(BloguserRequest $bloguserRequest)
    {
        $validated = $bloguserRequest->validated();

        BlogUser::create($bloguserRequest->all());

        return 'created';
    }

    public function profile()
    {
        return view('blog_user.profile');
    }

    public function logout()
    {
        if (Auth::guard('user')->check()){

            Cookie::queue(Cookie::forget('blog_user_email'));
            Cookie::queue(Cookie::forget('blog_user_passcode'));

            Auth::guard('user')->logout();

            return redirect()->route('blog-user.login');
        }
        else{
            return redirect()->back();
        }
    }
}
