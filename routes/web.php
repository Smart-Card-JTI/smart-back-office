<?php
use Illuminate\Support\Facades\Route;

// route admin
Route::get('admin','AdminController@index');
Route::get('admin/daftar_admin','AdminController@daftarAdmin');
Route::get('admin/create_user','AdminController@createUser');
Route::post('admin/create_user','AdminController@post_create_user');
Route::post('admin/edit_user/{id}', 'AdminController@post_edit');
Route::get('admin/edit_user/{id}', 'AdminController@updateUser');
Route::get('admin/delete_user/{id}', 'AdminController@deleteUser');
Route::get('admin/daftar_laporan','AdminController@daftarLaporan');
Route::get('admin/create_laporan','AdminController@createLaporan');
Route::post('admin/create_laporan','AdminController@post_create_laporan');
Route::post('admin/edit_laporan/{id}', 'AdminController@post_laporan');
Route::get('admin/edit_laporan/{id}', 'AdminController@edit_laporan');
Route::get('admin/delete_laporan/{id}', 'AdminController@deleteLaporan');
Route::get('admin/daftar_device','AdminController@daftarDevice');
Route::get('admin/create_device','AdminController@createDevice');
Route::post('admin/create_device','AdminController@post_create_device');
Route::post('admin/edit_device/{id}', 'AdminController@post_device');
Route::get('admin/edit_device/{id}', 'AdminController@edit_device');
Route::get('admin/delete_device/{id}', 'AdminController@deleteDevice');
Auth::routes();