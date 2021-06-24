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
    return view('welcome');
});

Route::get('/signup', function(){ return view('signup'); })->name('signup');
Route::get('/login', function(){ return view('login'); })->name('login');

Route::prefix('/teachers')->group(function(){
    Route::get('/teacher', function() { return view('t-lists/TeacherTeachersList'); });
    Route::get('/student', function() { return view('t-lists/StudentTeachersList'); });
    Route::get('/public', function() { return view('t-lists/PublicTeachersList'); });
});
