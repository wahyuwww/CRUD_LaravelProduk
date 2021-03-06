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
    return redirect('produk');
});



Route::get('halo', 'TestingController@halo');

Route::get('halaman/{page?}', function ($page = "profil") {
    return 'ini adalah halaman  ' . $page;
});

Route::get('halo/{nama?}', 'TestingController@halo');

Route::get('contact', function () {
    return 'ini adalah ahalaman contact';
})->name('contact');

Route::get('testing', function () {
    return redirect()->route('contact');
});

Route::group(["prefix" => "produk"], function () {
    Route::get("all", "ProdukController@all");
    Route::get("shirt", "ProdukController@shirt");
    Route::get("latest", "ProdukController@latest");
    Route::get("populer", "ProdukController@populer");
});


Route::resource('/produk', 'ProdukController');
//Route::get('/Produk','ProdukController@index');

Route::view('template', 'template/master');
// Route::view('Produk','Produk/create');

Route::view('profil', 'vw_profil');
Route::view('index', 'tampilan.index');
Route::view('about', 'vw_about');
Route::view('bootstrap', 'template/bootstrap');
