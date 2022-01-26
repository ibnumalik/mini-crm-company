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
    return inertia('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies', 'CompanyController');
Route::resource('employees', 'EmployeeController');

Route::get('/url', function ()
{
    return [
        'url' => url('/'),
        'config' => config('app.url'),
        'env' => env('APP_URL')
    ];
});