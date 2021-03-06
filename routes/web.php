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
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/images.index');
});

Route::get('/master', function () {
    return view('/layouts.master');
});

Route::get('/artikel', 'ArtikelController@index'); //menampilkan table artikel
Route::get('/artikel/create', 'ArtikelController@create');
Route::post('/artikel', 'ArtikelController@store'); // menyimpan data
Route::get('/artikel/{id}', 'ArtikelController@show'); // menampilkan detail 
// Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
// Route::post('/items', 'ItemController@store'); // menyimpan data
// Route::get('/items', 'ItemController@index'); // menampilkan semua
// Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
// Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
// Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
// Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id

