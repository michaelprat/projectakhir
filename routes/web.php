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

Route::get('/home','hucontroller@index');
Route::get('/homelog','hlcontroller@index');
Route::get('/homeadmin','admincontroller@index');
Route::get('/homesupplier','suppliercontroller@index');
Route::get('/login','logincontroller@index');
Route::get('/register','signupcontroller@index');
Route::get('/addproduct','productcontroller@create');
Route::get('/list','productcontroller@index');
Route::get('/listuser','admincontroller@tampiluser');
Route::get('/listtransaksi','admincontroller@tampiltransaksi');
Route::get('/list0','productcontroller@tampil0');
Route::get('/logout','SessionController@logout')->name('logout');
Route::get('/ganti','productcontroller@tampilkategori');
Route::get('/gantizero','productcontroller@tampilkategori0');
Route::get('/product','viewproduct@index');
Route::get('/productlog','viewproductlog@index');
Route::get('/changecategorylog','viewproductlog@tampilkategori');
Route::get('/addExcel','productcontroller@exceltampil');
Route::get('/checkout','cartcontroller@checkout');
Route::get('/customertrans','viewproductlog@viewlog');
Route::get('/overall','suppliercontroller@viewall');
Route::get('downloadPdfstock','suppliercontroller@exportPDFStock');
Route::resource('cart','cartcontroller');

Route::resource('signup','signupcontroller');
Route::resource('home','hucontroller');
Route::resource('login','logincontroller');
Route::resource('homelog','hlcontroller');
Route::resource('homeadm','admincontroller');
Route::resource('homesup','suppliercontroller');
Route::resource('produk','productcontroller');
Route::resource('produk0','productcontroller0');
Route::resource('produk2','productcontroller2');
Route::resource('viewproduct','viewproduct');
Route::resource('viewproduct2','viewproduct2');
Route::resource('viewproductlog','viewproductlog');
Route::resource('viewproductlog2','viewproductlog2');
//login-register-forgotpassword
Route::get('login','SessionController@login')->name('login');
Route::post('login','SessionController@login_store')->name('login.store');
Route::get('logout','SessionController@logout')->name('logout');
Route::get('signup','UserController@signup')->name('signup');
Route::post('signup','UserController@signup_store')->name('signup.store');
Route::get('forgot-password','ReminderController@create')->name('reminders.create');
Route::post('forgot-password','ReminderController@store')->name('reminders.store');
Route::get('reset-password/{id}/{token}','ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}','ReminderController@update')->name('reminders.update');
Route::post('importExcel','productcontroller@importExcel');