<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});
Route::get('/registration', 'PagesController@registration')->name('registration');
Route::post('/registration', 'Auth\RegisterController@register');

Route::get('/uploadbooks', 'PagesController@uploadbooks')->name('uploadbooks');
Route::post('/uploadbooks', 'BooksController@create');

Route::get('userDetails', 'PagesController@userDetails')->name('userDetails');

Route::get('/newsletter', 'NewslettersController@index');
Route::post('/newsletter/send', 'NewslettersController@send');

Route::get('/about', 'PagesController@about');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');

/*Route::get('/contact', 'PagesController@contact');*/

/*Route::post('send', 'MailController@send');
Route::get('newsletter', 'MailController@newsletter');*/

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

