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
    return view('index');
});

Route::get('my-captcha','captchaController@myCaptcha')->name('myCaptcha');

Route::post('my-captcha-post','captchaController@myCaptchaPost')->name('myCaptchaPost');

Route::get('refresh-captcha','captchaController@myCaptchaRefresh')->name('myCaptchaRefresh');


Route::get('/admin', function () {
    return view('admin');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/Doctor', function () {
    return view('doctor');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/dep', function () {
    return view('dep');
});

Route::get('/elements', function () {
    return view('elements');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single-blog/{id?}', function ($id=1) {
    return view('single-blog',compact('id'));
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('ArticleView/{id?}', function ($id=0) {

    return View::make('Article_View',['id'=>$id]);

});

Route::get('ArticleView', function () {

    return View::make('Article_View');

});







Route::get('/My_Appointment','AppointmentController@index');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/Article', 'ArticleController');

Route::resource('/Appointment', 'AppointmentController');

Route::post('AppointmentSave','AppointmentController@store2');








