<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProdukController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID'. $id;
});
Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);



Route::get('/kar', function () {
    return view('kar');
});



Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/list-produk', [ProductController::class, 'index']);

Route::get('/listproduk', [ListProdukController::class, 'show']);

