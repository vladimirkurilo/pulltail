<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('index', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');

Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');

Route::get('/booking-payment', function () {
    return view('booking-payment');
})->name('booking-payment');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/invoice-details', function () {
    return view('invoice-details');
})->name('invoice-details');

Route::get('/listing-details', function () {
    return view('listing-details');
})->name('listing-details');

Route::get('/listing-grid', function () {
    return view('listing-grid');
})->name('listing-grid');

Route::get('/listing-list', function () {
    return view('listing-list');
})->name('listing-list');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenance');

Route::get('/our-team', function () {
    return view('our-team');
})->name('our-team');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');

Route::get('/terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');