<?php

use App\Models\Post;
use Illuminate\Support\Arr;
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



Route::get('/', action: function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', action: function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]); // Mengambil semua post
});
Route::get('/blog/{id}', function (Post $post) {
    return view('post', ['post' => $post]); // Ubah menjadi 'post' => $post
});

Route::get('/contact', action: function () {
    return view('contact', ['title' => 'Contact', 'name' => 'Rafael Pandu Sumanti']);
});
