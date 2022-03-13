<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentsController;

Route::get('/', [PostController::class, 'index'])->name("home");
Route::get("posts/{post:slug}", [PostController::class, 'show']);

Route::post("posts/{post:slug}/comments", [PostCommentsController::class, 'store']);


// Middleware prevents users from accessing the register page if they are already logged in
Route::get("register", [RegisterController::class, 'create'])->middleware("guest");
Route::post("register", [RegisterController::class, 'store'])->middleware("guest");

Route::get("login", [SessionsController::class, 'create'])->middleware("guest");
Route::post("sessions", [SessionsController::class, 'store'])->middleware("guest");

// Must be logged in to log out.
Route::post("logout", [SessionsController::class, 'destroy'])->name("logout")->middleware("auth");


Route::middleware('can:admin')->group(function () {
     Route::resource('admin/posts', AdminPostController::class)->except('show');
 });
