d<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Notifications\DemoNotification;

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
Route::get('/test', function () {

    $user = User::find(1);

    $user->notify(new DemoNotification);
    return ('Success');

});

Route::post('/mail','MailController@sendMail' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
