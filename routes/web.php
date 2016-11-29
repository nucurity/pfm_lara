<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Support\Facades\Mail;

Auth::routes();
Route::get('/', 'PagesController@index');

Route::get('dashboard', 'DashboardController@index');
Route::get('debit', 'DashboardController@debit');
Route::get('credit', 'DashboardController@credit');


Route::post('addDebit', 'DashboardController@addDebit');
Route::post('addCredit', 'DashboardController@addCredit');


Route::post('/mail/email', 'MailController@index');





//Route::post('/password/email', function ());

/* Example for declaration
Route::get('users',['uses' => 'UsersController@index']);
Route::get('users/create',['uses' => 'UsersController@create']);
Route::post('users',['uses' => 'UsersController@store']);
*/



