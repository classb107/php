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
Route::get('/timkh', 'KhachHangController@timkiemKH')->name('timkh');
Route::get('/suakh', 'KhachHangController@suaKH')->name('suaKH');
Route::get('/xoakh', 'KhachHangController@xoaKH')->name('xoaKH');
Route::get('/themkh', 'KhachHangController@themKH')->name('themKH');
Route::get('/showsanpham', 'SanPhamController@index')->name('sanpham');
Route::get('/animal', 'AnimalController@index')->name('animaldemo');
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/demo', 'HomeController@demo')->name('demo');
Route::get('/home', 'HomeController@index')->name('demo1');
Route::get('/trangchu', 'HomeController@trangchu')->name('trangchu');
Route::get('/gioithieu', 'HomeController@gioithieu')->name('gioithieu');
Route::get('/sanpham', 'HomeController@sanpham')->name('sanpham');

