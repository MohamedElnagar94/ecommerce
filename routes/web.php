<?php
use App\Admin;
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
        Route::resource('/control', 'Admin\controller\AdminControlController');
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

// Route::get('/api/admin', function () {
//     return Admin::all();
// });
// Route::get('/', function () {
//     return view('agency.index');
// });

// ================================= agency ==================================== //
// index //
Route::resource('/', 'Agency\IndexController');

// // contact us //
Route::resource('/contactUs', 'Agency\ContactusController');

// CV //
Route::resource('/cv', 'Agency\CvController');

// employer //
Route::resource('/employer', 'Agency\CompaniesController');

// job details //
Route::resource('/jobdetails', 'Agency\JobdetailsController');

// latest news //
Route::resource('/latestnews', 'Agency\LatestnewsController');

// login //
Route::resource('/login', 'Agency\LoginController');

// news //
Route::resource('/news', 'Agency\NewsController');

// papers required for travel //
Route::resource('/papers', 'Agency\PapersController');

// profile jobs //
Route::resource('/profilejobs', 'Agency\ProfilejobsController');

// profile modify //
Route::resource('/profilemodify', 'Agency\ProfilemodifyController');

// profile //
Route::resource('/profile', 'Agency\ProfilepersonalController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
