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

Route::get('/', function () {
    return view('content/index');
})->name('index');
Route::get('item/{id}/{naam}/{beschrijving}', function ($post, $naam, $bes) {
    return view('content/item', ["postId" => $post, "postnaam" => $naam, "postBes" => $bes]);
})->name('item');

Route::get('about', function () {
    return view('other/about');
})->name('about');

Route::get('admin/create', function () {
    return view('admin/create');
})->name('create');
Route::get('admin/edit', function () {
    return view('admin/edit');
})->name('edit');
Route::get('admin/index', function () {
    return view('admin/index');
})->name('adminIndex');

Route::get('admin', function () {
    return view('latouts/admin');
})->name('admin');


