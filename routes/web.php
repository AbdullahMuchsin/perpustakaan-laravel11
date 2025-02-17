<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{id}', function ($id) {
    return "<h1>Halaman $id</h1>";
});

Route::get('/post/{content?}', function ($content = "Belum ada content") {
    return "<h1>$content</h1>";
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
    Route::get('/users', function () {
        return "Admin Users";
    });
});

Route::get('/data', function () {
    return "GET Request";
});
Route::post('/data', function () {
    return "POST Request";
});
Route::put('/data', function () {
    return "PUT Request";
});
Route::delete('/data', function () {
    return "DELETE Request";
});
Route::patch('/data', function () {
    return "PATCH Request";
});

Route::fallback(function () {
    return "404 - Not Found";
});

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'John']);
});
