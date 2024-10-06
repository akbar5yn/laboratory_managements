<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard',['title' => 'Beranda', 'schedules' => [
        [
            'nim' => '2000016001',
            'name' => 'Teguh Dwi Cahya Kusuma',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '07:00 - 09:00'
        ],
        [
            'nim' => '2000016003',
            'name' => 'Ansyafarino Arma Wahyudi',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '12:30 - 14:00'
        ],
        [
            'nim' => '2000016004',
            'name' => 'Daffa',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '14:10 - 15:30'
        ],
        [
            'nim' => '2000016005',
            'name'=> 'Rifky Ramadhan',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '16:00 - 17:00'
        ],
        [
            'nim' => '2000016006',
            'name'=> 'Rifky Ramadhan',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '17:20 - 18:10'
        ],
        [
            'nim' => '2000016002',
            'name' => 'Alfarizi Dwi Putra',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '09:20 - 10:00'
        ],
    ]]);
});

Route::get('/inventaris-alat', function () {
    return view('inventaris-alat', ['title' => 'Kelola Alat & Barang']);
});

Route::get('/inventaris-ruangan', function () {
    return view('inventaris-ruangan', ['title' => 'Kelola Ruangan']);
});

Route::get('/jadwal-ruangan', function () {
    return view('jadwal-ruangan', ['title' => 'Jadwal Ruangan',
    'schedules' => [
        [
            'nim' => '2000016001',
            'name' => 'Teguh Dwi Cahya Kusuma',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '07:00 - 09:00'
        ],
        [
            'nim' => '2000016003',
            'name' => 'Ansyafarino Arma Wahyudi',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '12:30 - 14:00'
        ],
        [
            'nim' => '2000016004',
            'name' => 'Daffa',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '14:10 - 15:30'
        ],
        [
            'nim' => '2000016005',
            'name'=> 'Rifky Ramadhan',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '16:00 - 17:00'
        ],
        [
            'nim' => '2000016006',
            'name'=> 'Rifky Ramadhan',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '17:20 - 18:10'
        ],
        [
            'nim' => '2000016002',
            'name' => 'Alfarizi Dwi Putra',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '09:20 - 10:00'
        ],
    ]
]);
});

Route::get('/peminjaman-alat', function () {
    return view('peminjaman-alat', ['title' => 'Peminjaman Alat & Barang']);
});

Route::get('/peminjaman-ruangan', function () {
    return view('peminjaman-ruangan', ['title' => 'Peminjaman Ruangan']);
});