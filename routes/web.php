<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('web',[\App\Http\Controllers\Yonet::class ,'site'])->name('web');
Route::get('form',[\App\Http\Controllers\Formislemleri::class,'gorunum'])->name('form');
Route::middleware('arakontrol')-> post('form-sonuc',[\App\Http\Controllers\Formislemleri::class,'sonuc'])->name('sonuc');
/*DB KÜTÜPHANESİ İŞLEMLERİ*/
Route::get('ekle',[\App\Http\Controllers\Veritabaniislemleri::class,'ekle'])->name('ekle');
Route::get('guncelle',[\App\Http\Controllers\Veritabaniislemleri::class,'guncelle'])->name('güncelle');
Route::get('sil',[\App\Http\Controllers\Veritabaniislemleri::class,'sil']);
Route::get('listele',[\App\Http\Controllers\Veritabaniislemleri::class,'bilgiler']);
/*MODEL İŞLEMLERİ*/
Route::get('model-liste',[\App\Http\Controllers\Modelislemleri::class,'liste']);
Route::get("model-ekle",[\App\Http\Controllers\Modelislemleri::class,'ekleme']);
Route::get('model-guncelle',[\App\Http\Controllers\Modelislemleri::class,'guncelleme']);
Route::get('model-sil',[\App\Http\Controllers\Modelislemleri::class,'silme']);
/*REQUES KULLANIMI*/
Route::get('iletisim',[\App\Http\Controllers\Iletisim::class,'index']);
Route::post('iletisim-sonuc',[\App\Http\Controllers\Iletisim::class,'ekleme'])->name('iletisim-sonuc');
/*RESİM YÜKLEME İŞLEMLERİ*/
Route::get('upload',function (){
   return view('upload');
});
Route::post('resim-sonuc',[\App\Http\Controllers\ResimYukle::class,'resimYukleme'])->name('resim-yukle');
/*VALİDATİON İŞLEMLERİ*/
Route::get('uyelik',function (){
   return view('uyelik');
});
Route::post('uye-kayit',[\App\Http\Controllers\Uyelikislemleri::class,'uyekayit'])->name('uyekayit');
/*TEMA PARÇALAMA , YEİLD , İNCIUDE İŞLEMLERLİ*/
Route::get('tema',function (){
   return view('pages.anasayfa');
});
Route::get('galeri',function (){
   return view('pages.galeri');
});
Route::get('hizmetler',function (){
   return view('pages.hizmetler');
});
Route::get('iletisim',function (){
   return view('pages.iletisim');
});
Route::get('kurumsal',function (){
   return view('pages.kurumsal');
});
Route::get()

