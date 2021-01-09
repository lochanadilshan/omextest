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





// welcome page
Route::get('/', function () {
    return view('welcome');
});

// Routes
route::resource('customer','cutomercontroller');
Route::get('datatable', 'cutomercontroller@indexpagetable')->name('datatable.indexpagetable');

route::resource('items','itemcontroller');

route::resource('chart','chartcontroller');






// route::resource('test','testcontroller');
// route::resource('datatable','cutomercontroller');
// Route::delete('users/{id}', 'cutomercontroller@destroy')->name('users.destroy');
//  route::resource('pictureStore','PictureStoreController');
//  route::resource('theme','ThemeController');
//  route::resource('ajax','cutomerController');

 
