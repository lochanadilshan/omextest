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

// Route::get('/viewpdffile', function(){
// return view('viewpdf.testpdf');
// });

// Route::get('/viewpdf',function(){
//     $pdf = PDF::loadView('viewpdf.testpdf');
//     return $pdf->stream('test.pdf');
// });


// Route::get('/viewpdfwithdatafile', function () {
//     $data =[
//         ['name' => 'Audi',
//         'logo' => 'https://cdn.1min30.com/wp-content/uploads/2017/08/Logo-Audi.png',
//         ],
//         ['name'=>'Ford',
//         'logo'=>'https://www.carlogos.org/logo/Ford-logo-1929-1440x900.png',
//         ]
//     ];
//     return view('pdfviews.pdfwithdata',compact('data'));
// });




// Route::get('/viewpdf', function(){
// $pdf = PDF::loadView('pdfviews.testpdf');
// return $pdf->stream('test.pdf');
// });





// Route::get('/pdfwithdata', function(){
//     $data =[
//         ['name' => 'Audi',
//         'logo' => 'https://cdn.1min30.com/wp-content/uploads/2017/08/Logo-Audi.png',
//         ],
//         ['name'=>'Ford',
//         'logo'=>'https://www.carlogos.org/logo/Ford-logo-1929-1440x900.png',
//         ]
//     ];
//     $pdf = PDF::loadView('pdfviews.pdfwithdata',compact('data'));





//    $pdf->setOrientation('landscape');
//    $pdf->setOption('header-right','Page [page]');
//   $pdf->setOption('header-right','[date]');
//  $pdf->setOptions([
//     'header-left'=>'Page [page]',
//     'header-right'=>'[date]',
//     'footer-right'=>'Chathura Dissanayaka - BIT Project Class'

//  ]);

//     return $pdf->stream('test.pdf');
// });











// welcome page
Route::get('/', function () {
    return view('auth.dashboard');
});

// Routes

Route::get('datatable', 'cutomercontroller@indexpagetable')->name('datatable.indexpagetable');

route::resource('items','itemcontroller');
Route::get('datatable2', 'itemcontroller@itemlisttable')->name('datatable2.itemlisttable');

route::resource('chart','chartcontroller');

Route::get('/export/','cutomercontroller@export');

Route::get('generatepdf','cutomercontroller@generate_pdf');

Route::get('export/income','Exportcontroller@exportIncome')->name('export.income');

Route::get('/customerimport','cutomercontroller@showimportpage')->name('customer.importview');

Route::post('customer/import', 'cutomercontroller@import')->name('import.income');
route::resource('customer','cutomercontroller');

// route::resource('test','testcontroller');
// route::resource('datatable','cutomercontroller');
// Route::delete('users/{id}', 'cutomercontroller@destroy')->name('users.destroy');
//  route::resource('pictureStore','PictureStoreController');
//  route::resource('theme','ThemeController');
//  route::resource('ajax','cutomerController');

 
Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');

  Route::resource('/dropdown','AjaxController');
  Route::POST('get_employee/{​​​​​​​​department}​​​​​​​​','Ajaxcontroller@get_employee')->name('employee.get_employee');

  // search
  // Route::resource('product','SearchController');
  // Route::POST('search_example','SearchController@search_example')->name('product.search_example');

  Route::resource('product', 'SearchController');
route::any('search_example','SearchController@search_example')->name('product.search_example');