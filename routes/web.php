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

use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    // Closure ฟังก์ชันไม่มีชื่อ
    return view('about');
});

Route::get('/master', function () {
    // Closure ฟังก์ชันไม่มีชื่อ
    return view('layouts.master');
});

Route::resource('/posts', 'PostController');
Route::resource('/orders', 'OrderController');
Route::resource('/products', 'ProductController');
Route::resource('/branches', 'BranchController');
Route::resource('/categories', 'ProductCategoryController');
Route::get('/deleted', 'ProductController@deleted');
Route::get('/manage', 'ProductController@manage');
Route::get('/deleted/{App\Product}', 'ProductController@restore');
Route::get('/login', 'LoginController@go');
Route::get('/home', 'IndexController@go');
Route::get('/register', 'RegisterController@go');
Route::get('/informations', 'InformationsController@go');
Route::get('/contact', 'ContactController@go');

Route::get('/test/api', function() {
    return view('test-api');
});

Route::get('/profile', 'UsersController@profile')->name('profile');
//->where('id', '[0-9]+');
//->name('posts.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('vue', 'vue');

Route::get('test', function(){
    return App\ProductCategory::with('products')
    ->where('id', 3)
    ->get();
});
