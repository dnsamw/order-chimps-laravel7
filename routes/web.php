<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ContactController;

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
    return view('main');
});



Route::get('/hybrid-pos', function () {
    return view('hybrid-pos');
});


Route::get('/digital-marketing-manager', function () {
    return view('digital-marketing-manager');
});
Route::get('/digital-marketing', function () {
    return view('digital-marketing');
});
Route::get('/digital-presence', function () {
    return view('digital-presence');
});
Route::get('/e-commerce', function () {
    return view('e-commerce');
});
Route::get('/partnerships', function () {
    return view('partnerships');
});
Route::get('/careers', function () {
    return view('careers');
});
Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/faq', function () {
    return view('faq');
});

//Route::get('/contact-us',[ContactController::class, 'contact']);
Route::post('/send-contact-message',[ContactController::class, 'sendEmail'])->name('contact.send');

// Route::get('/partner-up',[ContactController::class, 'partner']);
Route::post('/send-collab-message',[ContactController::class, 'sendPartnerQuery'])->name('partner.send');