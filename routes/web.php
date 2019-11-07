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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('students')->group(function () {
    Route::get('/', 'StudentController@index')->name('student.index');
    Route::get('add', 'StudentController@formAdd')->name('student.add');
    Route::post('add', 'StudentController@add')->name('student.add');
    Route::get('delete/{id}', 'StudentController@delete')->name('student.delete');
    Route::get('edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('edit/{id}','StudentController@update')->name('student.update');
});






