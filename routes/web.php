<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about-us', 'about')->name('about');
        Route::get('/our-team', 'team')->name('team');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::get('/parctice-areas', 'services')->name('services');
        Route::get('/privacy-policy', 'privacy')->name('privacy.policy');
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
    });
});
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    return response()->view('robots')->header('Content-Type', 'text/plain');
})->name('robots');
