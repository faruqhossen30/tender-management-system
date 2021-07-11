<?php

use Illuminate\Support\Facades\Route;
// Controlles for Fond-end
use App\Http\Controllers\FontendController\FrontCatagoryController;
use App\Http\Controllers\FontendController\InternationalController;
use App\Http\Controllers\FontendController\PrivateController;
use App\Http\Controllers\FontendController\NationalController;
use App\Http\Controllers\FontendController\AllTenderController;
use App\Http\Controllers\FontendController\TravelController;
use App\Http\Controllers\FontendController\AboutUsController;
use App\Http\Controllers\FontendController\ContactUsController;
use App\Http\Controllers\FontendController\EgpTraningController;
use App\Http\Controllers\FontendController\FontHomeController;

// Controlles for Admin-end



// Controlles for User-end


// Route for Fon-end

Route::get('/', [FontHomeController::class, 'index']);

Route::resource('/about', AboutUsController::class); //All route done
Route::resource('/contact', ContactUsController::class); //All route done
// Route::resource('/egptraning', EgpTraningController::class); // will will work next time

// Route::get('/travel', [TravelController::class, 'index']); // will will work next time
// Route::resource('/travel', TravelController::class); // Not need to use resource controller
Route::resource('/alltender', AllTenderController::class); //All route done
Route::resource('/international', InternationalController::class); //All route done
Route::resource('/national', NationalController::class); //All route done
Route::resource('/private', PrivateController::class);  //All route done
Route::resource('/fontcatagory', FrontCatagoryController::class); //All route done


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
