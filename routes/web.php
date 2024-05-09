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
use Intervention\Image\Facades\Image;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function()
// {
//     $img = Image::make('https://images.pexels.com/photos/4273439/pexels-photo-4273439.jpeg')->resize(300, 200); // 這邊可以隨便用網路上的image取代
//     return $img->response('jpg');
// });

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/index','NewsController@index');

Route::get('/get_main','NewsController@get_main');

// Route::get('/ajax/get_form','FormController@get_form');

Route::get('/ajax/{name_view}', 'FormController@get_form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/logout', 'LoginController@logout');



// usage inside a laravel route

