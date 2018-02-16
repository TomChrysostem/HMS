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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/home','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');

Route::get('admin/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register','Admin\RegisterController@register');
Route::post('admin','Admin\LoginController@login');

Route::post('admin/logout','Admin\LoginController@logout')->name('admin.logout');

Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

/*Staff*/
Route::get('admin/staff','StaffController@index')->name('staff.index');
Route::get('admin/staff/create','StaffController@create')->name('staff.create');
Route::post('admin/staff/create','StaffController@store');

Route::get('admin/staff/edit/{id}','StaffController@edit')->name('staff.edit');
Route::post('admin/staff/edit/{id}','StaffController@update');

Route::get('admin/staff/delete/{id}','StaffController@destory')->name('staff.delete');
Route::get('admin/staff/view/{id}','StaffController@show')->name('staff.view');
/*Staff*/