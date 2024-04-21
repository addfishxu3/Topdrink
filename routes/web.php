<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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


Route::post('/register',[ServiceController::class,'register']);
Route::post('/change',[ServiceController::class,'change']);
Route::post('/remove',[ServiceController::class,'remove']);


Route::get('/',function () {
    return view('layouts/app');
});
Route::get('/no1',function () {
    return view('layouts/no1');
});

Route::get('/customer',function () {
    return view('user/users');
});
Route::get('/registration',function () {
    return view('user/register');
});
Route::get('/updatedata',function () {
    return view('user/change');
});
Route::get('/delete',function () {
    return view('user/remove');
});
Route::get('/servicerigestered',function () {
    return view('user/success');
});
Route::get('/serviceerror',function () {
    return view('user/check');
});
Route::get('/serviceupdated',function () {
    return view('user/updatesuccess');
});
Route::get('/servicedeleted',function () {
    return view('user/deletesuccess');
});
Route::get('/servicedeleteerror',function () {
    return view('user/deletecheck');
});

Route::get('/aboutus',function () {
    return view('about/aboutus');
});


