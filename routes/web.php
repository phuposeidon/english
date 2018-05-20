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

Route::prefix('user')->group(function () {

    Route::get('index', function () {
        return view('admin.user.list');
    });

    Route::get('add', function () {
        return view('admin.user.add');
    });
    Route::get('edit', function () {
        return view('admin.user.edit');
    });
});

Route::prefix('test')->group(function () {
    Route::get('/', function () {
        return view('admin.test.list');
    });

    Route::get('/add',function(){
        return view('admin.test.add');
    });

    Route::get('/edit',function(){
        return view('admin.test.edit');
    });
});

Route::prefix('question')->group(function () {
    Route::get('add', function () {
        return view('admin.question.add');
    });
});




