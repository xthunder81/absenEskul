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
Route::get('/siswa', function () {
    return view('siswa.LoginSiswa');
})->name('Login_Siswa');

Route::post('/siswa/siswa_login', 'Siswa\siswaLoginController@login')->name('Proses_Login');

// Guru
Route::get('/guru', function () {
    return view('guru.LoginGuru');
})->name('Login_Guru');

Route::post('/guru/login', 'Guru\LoginGuruController@login')->name('Proses_Login_Guru');

// Admin
Route::get('/admin', function () {
    return view('admin.LoginAdmin');
})->name('Login_Admin');

Route::post('/admin/login', 'Admin\LoginAdminContoller@login')->name('Proses_Login_Admin');



// Test
Route::get('/test', function () {
    return view('admin.layouts.app');
})->name('test');