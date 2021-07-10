<?php

use Illuminate\Support\Facades\Route;
// Controlles for Fond-end




// Controlles for Admin-end



// Controlles for User-end

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
// Route for Fon-end

Route::get('/', function () {
    // return view('welcome');
    return "Welcom page";
});



// Route for authincate Admin area
Auth::routes();
// For Admin route
Route::get('/admin', function () {
    // return view('welcome');
    return "Your Login Admin";
})->middleware('is_admin');


// For User Route
Route::get('/user', function () {
    // return view('welcome');
    return "Your Login User";
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
