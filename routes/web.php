<?php

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

Auth::routes();

// User
Route::get('/siswa', function () {
    return view('siswa/LoginSiswa');
})->name('siswa');
Route::post('/login', 'Siswa\siswaLoginController@login')->name('Proses_Login');

// Guru
// Route::get('/guru', function () {
//     return view('/admin/LoginAdmin');
// })->name('Login_Admin');

// Admin
Route::get('/admin', function () {
    return view('/admin/LoginAdmin');
})->name('Login_Admin');
