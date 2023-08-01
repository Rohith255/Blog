<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function (){
   Route::get('login',[AdminController::class,'login'])->name('admin.login');
   Route::post('store',[AdminController::class,'store'])->name('admin.store');

   Route::middleware('auth:admin')->group(function (){
      Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
   });
});
