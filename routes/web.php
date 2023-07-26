<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pembayaran');
});

Route::get('/searchpage', function () {
    return view('searchpage');
});

Route::get('/caripage', function () {
    return view('caripage');
});

Route::get('/profilpage', function () {
    return view('profile');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/homepageun', function () {
    return view('homepageun');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/homepagecourse', function () {
    return view('homepagecourse');
});




