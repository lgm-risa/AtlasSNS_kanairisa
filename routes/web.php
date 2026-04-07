<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
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



require __DIR__ . '/auth.php';

// Route::get('top', [PostsController::class, 'index']);

// Route::get('profile', [ProfileController::class, 'profile']);

// Route::get('search', [UsersController::class, 'index']);

// Route::get('follow-list', [PostsController::class, 'index']);
// Route::get('follower-list', [PostsController::class, 'index']);


Route::get('login',function(){
  return view('auth.login');
})->name('login');
// ▼ログインしないと見れないミドルウェア
Route::middleware('auth')->group(function () {
   Route::get('top',[PostsController::class,
   'index']);
   Route::get('profile',[ProfileController::class,
   'profile']);
   Route::get('followlist',[FollowsController::class,
   'followlist']);
   Route::get('followerlist',[FollowsController::class,
   'followerlist']);
   Route::get('search', [UsersController::class, 'index']);


});
