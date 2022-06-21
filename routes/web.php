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
//use Illuminate\Database\QueryException;

use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dosen', 'DosenController@dosen');

    Route::get('/dosen/cari', 'DosenController@pencarian');

    Route::get('/dosen/formulirdosen', 'DosenController@formulirdosen');

    Route::post('/dosen/simpandosen', 'DosenController@simpandosen');

    Route::get('/dosen/editdosen/{id}', 'DosenController@editdosen');

    Route::put('/dosen/updatedosen/{id}', 'DosenController@updatedosen');

    Route::get('/dosen/deletedosen/{id}', 'DosenController@deletedosen');

    Route::get('/user', 'AuthController@user');

    Route::get('/user/formuliruser', 'AuthController@formuliruser');

    Route::post('/user/simpanuser', 'AuthController@simpanuser');

});


Route::get('/login', 'AuthController@login')->name('login')->middleware('guest');

Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth');
