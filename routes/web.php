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


Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');
Route::get("admin/posts", [AdminPostController::class, 'index'])->middleware("admin");
Route::get("admin/posts/create", [AdminPostController::class, 'create'])->middleware("admin");
Route::get("admin/posts/{post}/edit", [AdminPostController::class, 'edit'])->middleware("admin");
Route::patch("admin/posts/{post}", [AdminPostController::class, 'update'])->middleware("admin");
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');
