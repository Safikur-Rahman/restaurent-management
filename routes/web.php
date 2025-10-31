<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/pages/welcome');
});
Route::get('/create-admin', function () {
    return view('admin/pages/admins/create');
});
Route::get('/admins', function () {
    return view('admin/pages/admins/index');
});
Route::get('/raw-inventory', function () {
    return view('admin/pages/rawInventory/index');
});
Route::get('/display-inventory', function () {
    return view('admin/pages/displayInventory/index');
});
Route::get('/raw-product', function () {
    return view('admin/pages/rawproduct/index');
});
Route::get('/display-product', function () {
    return view('admin/pages/displayproduct/index');
});
Route::get('/orders', function () {
    return view('admin/pages/orders/index');
});
Route::get('/revenue', function () {
    return view('admin/pages/revenues/index');
});
Route::get('/pre-order', function () {
    return view('admin/pages/preOrder/index');
});
