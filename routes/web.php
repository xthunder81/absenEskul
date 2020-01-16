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
    return view('depan.land');
});

// Route::get('/landing','depanController@awal');


Auth::routes();

// User
Route::get('/login_siswa', function () {
    return view('siswa.LoginSiswa');
})->name('Login_Siswa');

Route::post('/login', 'Siswa\siswaLoginController@login')->name('Proses_Login');

// Guru
Route::get('/login_guru', function () {
    return view('guru.LoginGuru');
})->name('Login_Guru');

// Admin
Route::get('/login_admin', function () {
    return view('admin.LoginAdmin');
})->name('Login_Admin');

Route::post('/login', 'Admin\LoginAdminContoller@login')->name('Proses_Login_Admin');

// Test
Route::get('/test', function () {
    return view('admin.layouts.app');
})->name('test');