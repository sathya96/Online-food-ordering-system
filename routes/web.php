<?php


use Illuminate\Http\Request;
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

Route::get('/location', function () {
    return view('location');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::get('/usersaccount', 'AdminController@usersAccount');
Route::get('/adminsaccount', 'AdminController@adminsAccount');
Route::get('/staffsaccount', 'AdminController@staffsAccount');
Route::get('/adminproduct', 'AdminController@adminProduct');

Route::get('/viewedituser/{student_id}', 'AdminController@viewEditUser');
Route::post('/edituser', 'AdminController@editUser');
Route::get('/deleteuser/{user_id}', 'AdminController@deleteUser');

Route::get('/vieweditadmin/{student_id}', 'AdminController@vieweditAdmin');
Route::post('/editadmin', 'AdminController@editAdmin');
Route::get('deleteadmin/{admin_id}', 'AdminController@deleteadmin');

Route::get('/search', function (Request $request) {
    $result = App\Admin::search($request->search)->get();
    return view('result', compact('result'));
});
Route::get('/search', function (Request $request) {
    $result = App\User::search($request->search)->get();
    return view('result', compact('result'));
});
Route::resource('products', 'ProductsController');
Route::get('/addproduct', 'ProductsController@addproductform');
Route::post('/addproduct', 'ProductsController@addproduct');
Route::get('destroyproduct/{id}','ProductsController@destroyproduct');
Route::get('/updateproducts/{products_id}', 'ProductsController@updateproductsform');
Route::post('/updateproducts', 'ProductsController@updateproducts');

