<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/post/{}', function () {
    $post = file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html');

    return view('post', [
        'post'=> $post
    ]);
});

Route::resource('products', ProductController::class);
