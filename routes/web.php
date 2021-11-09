<?php

use App\Http\Controllers\{
    CommentController,
    PostController,
    UserController
};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/post');
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/comment', [CommentController::class, 'index']);
