<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/rak-delete', function () {
    return view('rak-delete');
});

Route::get('/notif-user-login', function () {
    return view('notif-user-login');
});

Route::get('/notif-delete', function () {
    return view('notif-delete');
});

Route::get('/notif-create', function () {
    return view('notif-create');
});

Route::get('/notif-edit', function () {
    return view('notif-edit');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/notif-admin', function () {
    return view('notif-admin');
});

Route::get('/notif-admin-login', function () {
    return view('notif-admin-login');
});

Route::get('/rak-update', function () {
    return view('rak-update');
});

Route::get('/rak-read', function () {
    return view('rak-read');
});

Route::get('/data-user', function () {
    return view('/data-user');
});

Route::get('/notif-user-login', function () {
    return view('notif-user-login');
});

Route::get('/rak-buku', function () {
    return view('rak-buku');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/search-results', function () {
    return view('search-results');
});

Route::get('rak-read', [BukuController::class,('rakread')]);
Route::get('rak-delete', [BukuController::class,('rakdelete')]);
Route::get('rak-update', [BukuController::class,('rakupdate')]);
Route::get('rak-buku', [BukuController::class,('index')]);
Route::get('create', [BukuController::class, ('create')]);
Route::post('rak-buku', [BukuController::class, ('store')]);
Route::delete('bukus/{buku:id}', [BukuController::class, 'destroy']);

Route::get('data-user', [UserController::class,('index')]);
Route::get('register', [UserController::class, ('create')]);
Route::post('user', [UserController::class, ('store')]);

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);

Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/buku/{id}/edit', [BukuController::class, ('edit')]);
Route::put('/buku/{id}', [BukuController::class, ('update')]);

Route::get('/buku/search', [BukuController::class, 'search']);