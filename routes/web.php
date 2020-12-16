<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::get('admin/panel','App\Http\Controllers\Back\Dashboard@index')->name('admin.dashboard');
Route::get('admin/giris','App\Http\Controllers\Back\Auth@login')->name('admin.login');

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/','App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('/iletisim','App\Http\Controllers\Front\Homepage@contact')->name('contact'); // sabit tanımladığımız url leri en üste koymamız lazım
Route::post('/iletisim','App\Http\Controllers\Front\Homepage@contactpost')->name('contact.post');
Route::get('/kategori/{category}','App\Http\Controllers\Front\Homepage@category')->name('category');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\Homepage@single')->name('single');
Route::get('/{sayfa}','App\Http\Controllers\Front\Homepage@page')->name('page');




