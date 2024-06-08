<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});
use App\Http\Controllers\AdminController;

Route::get('admin/login', [AdminController::class, 'login'])->name('adminlogin');

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'inndex']);

Route::get('/logout', function () {
    return view('welcome');
});
Route::get('/adminn', function () {
    return view('hadi');
});
Route::get('/ad', function () {
    return view('inndex');
});
Route::get('/massage', function () {
    return view('see');
});
Route::get('/create', function () {
    return view('create');
});
Route::post('/create', function(){
    $article = new Article();
    $article->title = request('title');
    $article->body = request('body');
    $article->save();
});