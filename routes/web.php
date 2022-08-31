<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/gallery', function () {
    return view('gallary');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/formm/{id}', [FormController::class, 'hello']);
Route::get('/resume', function () {
    return view('resume1');
});
Route::get('/resume1', function () {
    return view('resume2');
});
Route::get('/resume2', function () {
    return view('resume3');
});
Route::post('/test', [FormController::class, 'formroute']);
