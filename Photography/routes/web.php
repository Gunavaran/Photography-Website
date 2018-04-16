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

Route::get('/','ViewController@showHome') -> name('home');

Route::get('/dashboard', 'ViewController@showDashboard') -> name('dashboard');

Route::get('/login','ViewController@showLogInForm') -> name('loginForm');

Route::get('/authenticate','AuthController@authenticate') -> name('authenticate');

Route::get('/dashboard/myDetails','ViewController@showMyDetails') -> name('myDetails');

Route::get('/dashboard/changePasswordForm','ViewController@showChangePasswordForm') -> name('changePasswordForm');

Route::post('/dashboard/changePassword','FormController@changePassword') -> name('changePassword');

Route::post('/dashboard/updateMyDetails','FormController@updateMyDetails') -> name('updateMyDetails');

Route::get('/dashboard/categories','ViewController@showCategories') -> name('showCategories');

Route::post('/dashboard/storeCategory','FormController@storeCategory') -> name('storeCategory');

Route::post('/dashboard/removeCategory','FormController@removeCategory')->name('removeCategory');

Route::get('/dashboard/selectCategory','ViewController@showSelectCategory') -> name('uploadPhotos_selectCategory');

Route::post('/dashboard/uploadPhotosForm','ViewController@showUploadPhotosForm') -> name('uploadPhotosForm');

Route::post('/dashboard/uploadPhotos','FileController@uploadPhotos') -> name('uploadPhotos');

Route::get('/dashboard/viewPhotos','ViewController@showPhotoView') -> name('viewPhotos');

Route::post('/dashboard/viewPhotos/search','FormController@search') -> name('search');
Route::get('/dashboard/viewPhotos/removePhotos',['as=>photo','uses' =>'FileController@removePhotos' ])->name('removePhotos');

Route::get('/gallery','ViewController@showGallery') -> name('gallery');

Route::get('/logout','AuthController@logout') -> name('logout');
Route::get('/services','ViewController@showServices')->name('services');
Route::get('/contactDetails','ViewController@showContact')->name('contact');

