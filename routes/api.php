<?php

use App\Admin;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/admin', 'AdminApiController');
Route::get('/paper', 'AdminApiController@paper');
// Route::get('/api/admin', function () {
//     return Admin::all();
// });

// Route::group([    
//     'namespace' => 'Auth',    
//     'middleware' => 'api',    
//     'prefix' => 'admin'
// ], function () {    
//     Route::post('/forgotpassword/create', 'ForgotPasswordController@create');
//     Route::get('/forgotpassword/find/{token}', 'ForgotPasswordController@find');
//     Route::post('/forgotpassword/reset', 'ForgotPasswordController@reset');
//     // Route::resource('/forgotpassword', 'ForgotPasswordController');
// });
