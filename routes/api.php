<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return ['version' => '1.0'];
});
Route::get('/about-us', function () {
    return [
        'name' => 'patfire der 200',
        'cop' => 2019,
        'data' => null,
        'boolean' => [
            'ture' => true,
            'falss' => false
        ]
    ];
});
//Route::get('/posts/index', 'ApiPostsController@index');
Route::apiResource('/posts', 'Api\PostsController');

Route::post('/login', 'Api\UsersController@login');
