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

route::resource('customer','cutomercontroller');

route::resource('datatable','cutomercontroller');
Route::get('customer1', 'cutomercontroller@indexpagetable')->name('datatable.indexpagetable');

// Route::delete('users/{id}', 'cutomercontroller@destroy')->name('users.destroy');
//  route::resource('pictureStore','PictureStoreController');

//  route::resource('theme','ThemeController');

//  route::resource('ajax','cutomerController');

 
