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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * ================
 * Admin User Route to controller
 * ================
 */

Route::resource('admin/users', 'AdminUsersController');

Route::get('/admin', function (){
    return view('admin.index');
});

Route::get('/createuser', function(){
    User::create(['name'=>'oudam sos', 'role'=>1,'password'=>'123','email'=>'sos@gmail.com']);
    return "success";
});