<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login-post', 'login_post')->name('login_post');
    

});
Route::controller(UserController::class)->group(function () {
    Route::post('/store', 'store')->name('user_store');

});
Route::middleware('isAuth')->group(
    function () {
Route::controller(TicketController::class)->group(function () {
    Route::get('/', 'index')->name('ticket_list');
     Route::get('/view/{id?}','view')->name('ticket_view');
     Route::post('/book-ticket','bookTicket')->name('ticket_book');
   
});
Route::controller(BookingController::class)->prefix('booking')->group(function () {
    Route::get('/', 'index')->name('booking_list');

});
    });