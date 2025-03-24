<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID'. $id;
});
Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
