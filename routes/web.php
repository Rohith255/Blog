<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogUserController;
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

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('store', [AdminController::class, 'store'])->name('admin.store');

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::get('list/blogs',[AdminController::class,'listBlogs'])->name('admin.list-blogs');
        Route::get('categories',[AdminController::class,'categories'])->name('admin.categories');
        Route::get('blog/users',[AdminController::class,'blogUsers'])->name('admin.blog-users');
        Route::get('view/blog/{id}',[AdminController::class,'viewBlog'])->name('admin.view-blog');
    });
});

Route::prefix('user')->group(function (){
   Route::get('login',[BlogUserController::class,'login'])->name('blog-user.login');
   Route::post('store',[BlogUserController::class,'store'])->name('blog-user.store');
   Route::get('register',[BlogUserController::class,'register'])->name('blog-user.register');
   Route::post('submit',[BlogUserController::class,'submit'])->name('blog-user.submit');

   Route::middleware('user_auth')->group(function (){
       Route::get('profile',[BlogUserController::class,'profile'])->name('blog-user.profile');
       Route::post('logout',[BlogUserController::class,'logout'])->name('blog-user.logout');
   });
});
