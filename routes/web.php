<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/products', 'App\Http\Controllers\ProductController@view');
Route::get('/add-product', 'App\Http\Controllers\ProductController@create');
Route::post('/add-product', 'App\Http\Controllers\ProductController@store');
Route::get(
    '/edit-product/{productid}',
    'App\Http\Controllers\ProductController@edit'
);
Route::post(
    '/update-product/{productid}',
    'App\Http\Controllers\ProductController@update'
);
Route::get(
    '/delete-product/{productid}',
    'App\Http\Controllers\ProductController@delete'
);

Route::get('/categories', 'App\Http\Controllers\CategoryController@view');
Route::get('/add-category', 'App\Http\Controllers\CategoryController@create');
Route::post('/add-category', 'App\Http\Controllers\CategoryController@store');
Route::get(
    '/edit-category/{categoryid}',
    'App\Http\Controllers\CategoryController@edit'
);
Route::post(
    '/update-category/{categoryid}',
    'App\Http\Controllers\CategoryController@update'
);
Route::get(
    '/delete-category/{categoryid}',
    'App\Http\Controllers\CategoryController@delete'
);

Route::get('/', function () {
    return view('HomePage.welcome');
});
Route::get('/modal', function () {
    return view('Modal.deletemodal');
});
