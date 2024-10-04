<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Beranda']);
});

Route::get('/inventaris', function () {
    return view('inventaris', ['title' => 'Invetaris']);
});
