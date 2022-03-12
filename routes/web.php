<?php

use App\Models\User;
use App\Http\Controllers\PostController;
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

// \Illuminate\Support\Facades\DB::listen(function ($query) {
//     logger($query->sql);
// });
// return view("posts", ["posts" => Post::latest()->with('category', 'author')->get()]);
Route::get('/', [PostController::class, 'index'])->name("home");
Route::get("posts/{post:slug}", [PostController::class, 'show']);

Route::get("authors/{author:username}", function(User $author){
    return view("posts.index", ["posts" => $author->posts]);
});
