<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//  For using angular
// use App\Http\Controllers\AngularController;
//  Route::any('/{any}', [AngularController::class, 'index'])->where('any', '^(?!api).*$');

Route::get('/', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);