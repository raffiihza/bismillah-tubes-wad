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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('pages.home' ,[
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/antrian', function() {
    return view('pages.antrian', [
        'title' => 'Antrian'
    ]);
})->name('antrian');

Route::get('/total-pasien', function() {
    return view('pages.total-pasien', [
        'title' => 'Total Pasien'
    ]);
})->name('total-pasien');

Route::get('/informasi', function() {
    return view('pages.informasi', [
        'title' => 'Informasi'
    ]);
})->name('informasi');

Route::get('/beranda-informasi', function() {
    return view('pages.beranda-informasi', [
        'title' => 'Beranda Informasi'
    ]);
})->name('beranda-informasi');

Route::get('/landing-page', function() {
    return view('pages.landing-page', [
        'title' => 'Landing Page'
    ]);
})->name('landing-page');

Route::get('/artikel', function() {
    return view('pages.artikel', [
        'title' => 'Artikel'
    ]);
})->name('artikel');

Route::get('/beranda-pasien', function() {
    return view('pages.beranda-pasien', [
        'title' => 'Beranda Pasien'
    ]);
})->name('beranda-pasien');

Route::get('/form-pendaftaran', function() {
    return view('pages.form-pendaftaran', [
        'title' => 'Form Pendaftaran'
    ]);
})->name('form-pendaftaran');
