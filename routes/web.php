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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Route::get('/', function () {
//     return view('agency.index');
// });

// ================================= agency ==================================== //
// index //
Route::resource('/', 'agency\IndexController');

// // contact us //
Route::resource('/contactUs', 'agency\ContactusController');

// CV //
Route::resource('/cv', 'agency\CvController');

// employer //
Route::resource('/employer', 'agency\EmployerController');

// job details //
Route::resource('/jobdetails', 'agency\JobdetailsController');

// latest news //
Route::resource('/latestnews', 'agency\LatestnewsController');

// login //
Route::resource('/login', 'agency\LoginController');

// news //
Route::resource('/news', 'agency\NewsController');

// papers required for travel //
Route::resource('/papers', 'agency\PapersController');

// profile jobs //
Route::resource('/profilejobs', 'agency\ProfilejobsController');

// profile modify //
Route::resource('/profilemodify', 'agency\ProfilemodifyController');

// profile //
Route::resource('/profile', 'agency\ProfilepersonalController');
