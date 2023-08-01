<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-login',function (){
    return view('admin.admin_login');
});

Route::get('/user-login',function (){
    return view('blog_user.login');
});

Route::get('/user-register',function (){
    return view('blog_user.register');
});
