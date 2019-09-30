<?php

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

Route::get('/hello/array', function () {
    // Closure ฟังก์ชันไม่มีชื่อ 
    return [
        [
        'message' => 'hello laravel',
        'aa' => ['message' => 'hello laravel',
        'aa' => 'aaaa']
        ]
        ,[
            'message' => 'hello laravel',
        'aa' => ['message' => 'hello laravel',
        'aa' => 'aaaa']
        ]
    ];
});

Route::get('/about-us', function () {
    // Closure ฟังก์ชันไม่มีชื่อ
    return view('about');
});

Route::get('/master', function () {
    // Closure ฟังก์ชันไม่มีชื่อ
    return view('layouts.master');
}); 

Route::get('/posts', 'PostsController@index');
Route::get('/login', 'LoginController@go');
Route::get('/register', 'RegisterController@go');
Route::get('/posts/{id}', 'PostsController@show');
Route::get('/product', 'ProductController@go');
Route::get('/information', 'InformationController@go');
Route::get('/contact', 'ContactController@go');
//->where('id', '[0-9]+');
//->name('posts.show');