<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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

    
Route::get('/organizer/login', 'Auth\OrganizerLoginController@ShowLoginForm')->name('organizer.login');
Route::post('/organizer/login', 'Auth\OrganizerLoginController@login')->name('organizer.login.submit');
Route::get('/organizer', 'AdminController@index')->name('organizer.dashboard');

Route::resource('home', 'EventsController');
Route::resource('posts','PostsController');


Route::post('/feedbackslist/{id}', 'AdminController@feedback')->name('feedback');

Route::get('/addfeedback/{id}', 'EventsController@feedbackadd')->name('feedback.add');
Route::post('/feedbacksumbit', 'EventsController@feedbacksumbit');

Route::post('/{id}', 'EventsController@join')->name('home.join');


