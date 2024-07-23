<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Giraldo Stevanus Nainggolan', 'title' => 'Page Blog']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Page Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);


    return view('post', ['title' => 'Singgel Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count() 'Articles by ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Page Contact']);
});
