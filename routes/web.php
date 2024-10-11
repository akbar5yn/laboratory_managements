<?php

use Illuminate\Support\Arr;
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
    return view('inventaris-alat', ['title' => 'Kelola Alat & Barang', 'tools' => [
        [
            'id' => '1',
            'id_alat' => 'NEA',
            'nama_alat' => 'Neraca 800 series',
            'lokasi' => 'Lab Fisika Dasar',
            'tahun_pengadaan' => '2016',
            'fungsi_alat' => 'Menimbang sampel ',
        ],
        [
            'id' => '2',
            'id_alat' => 'KIT',
            'nama_alat' => ' Kit Praktikum Elektronika Dasar ',
            'lokasi' => 'Lab Elektronika dan Instrumentasi',
            'tahun_pengadaan' => '2016',
            'fungsi_alat' => 'Praktikum elektronika dasar ',
        ],

        [
            'id' => '3',
            'id_alat' => 'MUR',
            'nama_alat' => 'Multimeter Digital',
            'lokasi' => ' Lab Fisika Modern',
            'tahun_pengadaan' => '2016',
            'fungsi_alat' => ' Mengukur Arus dan Tegangan',
        ],   
        
        [
            'id' => '4',
            'id_alat' => 'CAU',
            'nama_alat' => 'Catu Daya',
            'lokasi' => 'Lab Fisika Modern',
            'tahun_pengadaan' => '2016',
            'fungsi_alat' => 'Mengalirkan tegangan dengan mengubah tegangan AC ke DC ',
        ],
        [
            'id' => '5',
            'id_alat' => 'AUO',
            'nama_alat' => ' Audio Frequency Generator GW/GRG-450B',
            'lokasi' => 'Lab Elektronika dan Instrumentasi ',
            'tahun_pengadaan' => '2016',
            'fungsi_alat' => 'Untuk menghasilkan sinyal pada frekuensi tertentu ',
        ],
    ]]);
});

Route::get('/inventaris-alat/{id}', function ($id_alat){
    $tools = [
        [
            [    
                'id_alat' => 'NEA',
                'no_unit' => 'NEA1',
                'nama_alat' => 'Neraca 800 series',
                'status' => 'Dipinjam',
                'kondisi' => 'Normal',
                
            ],
            [    
                'id_alat' => 'NEA',
                'no_unit' => 'NEA2',
                'nama_alat' => 'Neraca 800 series',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                
            ],
            [    
                'id_alat' => 'NEA',
                'no_unit' => 'NEA3',
                'nama_alat' => 'Neraca 800 series',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                
            ],
            [    
                'id_alat' => 'NEA',
                'no_unit' => 'NEA4',
                'nama_alat' => 'Neraca 800 series',
                'status' => 'Rusak',
                'kondisi' => 'Rusak',
                
            ],
        ],
        [
            [
                'id_alat' => 'KIT',
                'no_unit' => 'KIT1',
                'nama_alat' => ' Kit Praktikum Elektronika Dasar ',
                'status' => 'Dipinjam',
                'kondisi' => 'Normal',
                
            ],
            [
                'id_alat' => 'KIT',
                'no_unit' => 'KIT2',
                'nama_alat' => ' Kit Praktikum Elektronika Dasar ',
                'status' => 'Rusak',
                'kondisi' => 'Rusak',
                
            ],
            [
                'id_alat' => 'KIT',
                'no_unit' => 'KIT3',
                'nama_alat' => ' Kit Praktikum Elektronika Dasar ',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                
            ],
        ],

        [
            [
                'id_alat' => 'MUR',
                'no_unit' => 'MUR1',
                'nama_alat' => 'Multimeter Digital',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                
            ],
            [
                'id_alat' => 'MUR',
                'no_unit' => 'MUR2',
                'nama_alat' => 'Multimeter Digital',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                
            ],
        ],   
        
        [
            [
                'id_alat' => 'CAU',
                'no_unit' => 'CAU1',
                'nama_alat' => 'Catu Daya',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                
            ]
        ],
        [
            [
                'id_alat' => 'AUO',
                'no_unit' => 'AUO1',
                'nama_alat' => ' Audio Frequency Generator GW/GRG-450B',
                'status' => 'Tersedia',
                'kondisi' => 'Normal',
                
            ]
        ],
    ];

    $flattenedTools = Arr::flatten($tools, 1);
    $matchingTools = Arr::where($flattenedTools, function ($tool) use ($id_alat) {
        return $tool['id_alat'] == $id_alat;
    });
    if (empty($matchingTools)) {
        abort(404, 'Tool not found');
    }
    return view('detail-alat', [
        'title' => 'Kelola Alat & Barang',
        'subtitle' => 'Detail Alat',
        'tools' => $matchingTools // Mengirimkan semua unit dengan id_alat yang sama
    ]);
});

Route::get('/inventaris-ruangan', function () {
    return view('inventaris-ruangan', ['title' => 'Kelola Ruangan', 'rooms' => [
        [
            'id' => '1',
            'id_ruangan' => 'lab-01',
            'nama_ruangan' => 'Lab Fisika Dasar',
            'lokasi_ruangan' => 'Gedung Utama Lantai 1',
            'kapasitas' => '30'
        ],
        [
            'id' => '2',
            'id_ruangan' => 'lab-02',
            'nama_ruangan' => 'Lab Fisika Modern',
            'lokasi_ruangan' => 'Gedung Utama Lantai 2',
            'kapasitas' => '20'
        ],
        [
            'id' => '3',
            'id_ruangan' => 'lab-03',
            'nama_ruangan' => 'Lab Elektronika dan Instrumentasi',
            'lokasi_ruangan' => 'Gedung Utama Lantai 1',
            'kapasitas' => '20'
        ],
        [
            'id' => '4',
            'id_ruangan' => 'lab-04',
            'nama_ruangan' => 'Ruang Material 1 dan Material 5',
            'lokasi_ruangan' => 'Gedung Utama Lantai 2',
            'kapasitas' => '30'
        ],
    ]]);
});

Route::get('/jadwal-ruangan', function () {
    return view('jadwal-ruangan', ['title' => 'Jadwal Ruangan', 'schedules' => [
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

Route::get('/peminjaman-alat', function () {
    return view('peminjaman-alat', ['title' => 'Peminjaman Alat & Barang']);
});

Route::get('/peminjaman-ruangan', function () {
    return view('peminjaman-ruangan', ['title' => 'Peminjaman Ruangan']);
});