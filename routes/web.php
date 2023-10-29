<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('frontend.master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::post('color/change',    [App\Http\Controllers\SettingController::class, 'UserColor'])->name('user.update.post.color');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    
    Route::get('/user/list', [MemberController::class, 'list'])->name('user.list');
    // Route::get('/user/create', [MemberController::class, 'createShow'])->name('user.create');
    // Route::post('/user/create/post', [MemberController::class, 'create'])->name('user.create.post');
    Route::get('/user/edit', [MemberController::class, 'edit'])->name('user.edit');
    Route::post('/user/udate/{id}', [MemberController::class, 'update'])->name('user.update');
    Route::get('/user/delete', [MemberController::class, 'delete'])->name('user.delete');
    Route::get('/user/info/download/{id}', [MemberController::class, 'downloadInfo'])->name('download.user.info');


    
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
