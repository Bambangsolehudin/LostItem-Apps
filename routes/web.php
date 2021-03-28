<?php

use App\Http\Controllers\ItemController;
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
    return view('welcome');
});

// Route::get('/item','ItemController@index');
Route::get('/barang','ItemAllController@index')->name('barang');
Route::get('/barang-hilang','ItemAllController@barangHilang')->name('barang-hilang');
Route::get('/barang-temuan','ItemAllController@barangTemuan')->name('barang-temuan');
Route::get('/answer-detail/{id}','AnswerController@answerdetail')->name('answer-detail');
Route::get('/user-detail/{id}','AnswerController@userdetail')->name('user-detail');

Route::get('my-profile','UserController@index')->name('my-profile');
Route::get('/user.edit/{id}','UserController@edit')->name('user.edit');
Route::put('/user/{id}','UserController@update')->name('user.update');





Route::get('/barang/{id}','ItemAllController@show')->name('show');
Route::post('/answer','ItemAllController@answer')->name('answer');
// Route::get('/myanswer','AnswerController@index')->name('myanswer');





Route::resource('item', 'ItemController'); 
Route::resource('image', 'ImageController'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


