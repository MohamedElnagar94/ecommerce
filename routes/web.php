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

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => ['admin']], function () {
        Route::resource('/', 'AdminController');
        Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    });
    Route::group(['middleware' => ['guest']], function () {
        Route::resource('/forgotpassword', 'ForgotPasswordController');
        Route::post('/forgotpassword/create', 'ForgotPasswordController@create')->name('forgotpassword.create');
        Route::get('/forgotpassword/find/{token}', 'ForgotPasswordController@find');
        // Route::get('/forgotpassword/reset', 'ForgotPasswordController@getreset');
        Route::post('/forgotpassword/reset', 'ForgotPasswordController@reset')->name('password.reset');
        Route::resource('/login', 'LoginController');
        Route::resource('/register', 'RegisterController');
    });
});
;

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
Route::resource('/employer', 'agency\CompaniesController');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
