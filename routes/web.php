<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Models\request1;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/request', function () {
    return view('request');
});
Route::post('/request',[RequestController::class,'setStatuse'])->name('request');
Route::get('/verify', function () {
    return view('verify');
})->name('verify');

Route::get('/admin', function () {
    $request = request1::all();
    return view('admin', ['request' => $request]);
})->middleware('auth');
Route::get('/verifyUser/{id}',[RequestController::class,'verifyUser'])->name('verifyUser');