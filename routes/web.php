<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\UserController as User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//guest route
Route::get('/',[Home::class,'index'])->name('web.home');

Route::get('login',[User::class,'userLogin'])->name('login');
Route::get('register',[User::class,'userRegister'])->name('user.register');
Route::post('register-submit',[User::class,'userRegisterPost'])->name('user.register.post');
Route::post('login-submit',[User::class,'userLoginPost'])->name('user.login.post');
Route::get('/test-command',[User::class,'testCommand']);
//auth route
Route::get('dashboard',[User::class,'index'])->name('admin.dashboard')->middleware('auth');
Route::get('run-command',function(){
    \Artisan::call('cache:clear');
    echo 'success';
});
Route::get('logout',[User::class,'logout'])->name('user.logout');

//require __DIR__.'/auth.php';
