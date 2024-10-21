<?php

use App\Http\Controllers\EquipmentCategoryController;
use App\Http\Controllers\EquipmentUnitController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', ['title' => 'Beranda', 'schedules' => [
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
            'name' => 'Rifky Ramadhan',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '16:00 - 17:00'
        ],
        [
            'nim' => '2000016006',
            'name' => 'Rifky Ramadhan',
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

//TODO - Inventaris Alat
Route::get('/inventaris-alat', [EquipmentCategoryController::class, 'index'])->name('equipment.category');

Route::get('/inventaris-alat/{name}', [EquipmentUnitController::class, 'show'])->name('equipment.unit');

//ANCHOR - Inventaris Ruangan
Route::get('/inventaris-ruangan', function () {
    return view('admin.inventaris-ruangan', ['title' => 'Kelola Ruangan', 'rooms' => Room::All()]);
});

//ANCHOR - Peminjaman Alat
Route::get('/peminjaman-alat/pengajuan', function () {
    return view('admin.pengajuan-peminjaman-alat', ['title' => 'Peminjaman Alat & Barang', 'requests' => [
        [
            'id' => '2',
            'id_request' => 'Daffa2',
            'nama_peminjam' => 'Muhammad Daffa',
            'no_handphone' => '0852-0001-0002',
            'email' => 'daffa@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2',
            'keperluan' => 'Keperluan Penelitian',
            'jumlah_pinjam' => '2',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Pending',
        ],
        [
            'id' => '3',
            'id_request' => 'Teguh3',
            'nama_peminjam' => 'Teguh Dwi Cahya Kusuma',
            'no_handphone' => '0852-0001-0002',
            'email' => 'daffa@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2',
            'keperluan' => 'Keperluan Penelitian',
            'jumlah_pinjam' => '1',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Pending',
        ],
        [
            'id' => '4',
            'id_request' => 'Ansyafarino4',
            'nama_peminjam' => 'Ansyafarino',
            'no_handphone' => '0852-0001-0002',
            'email' => 'daffa@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2',
            'keperluan' => 'Keperluan Penelitian',
            'jumlah_pinjam' => '4',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Pending',
        ]
    ]]);
});

Route::get('/peminjaman-alat/pengajuan/{id}', function ($id_request) {
    $requests = [
        [
            'id_request' => 'Daffa2',
            'nama_peminjam' => 'Muhammad Daffa',
            'no_handphone' => '0852-0001-0002',
            'email' => 'daffa@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Pending'
        ],
        [
            'id_request' => 'Teguh3',
            'nama_peminjam' => 'Teguh Dwi Cahya Kusuma',
            'no_handphone' => '0852-0001-0002',
            'email' => 'teguh@gmail.com',
            'barang_dipinjam' => 'Barang1',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Pending'
        ],
        [
            'id_request' => 'Ansyafarino4',
            'nama_peminjam' => 'Ansyafarino',
            'no_handphone' => '0852-0001-0002',
            'email' => 'rino@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2, Barang3, Barang4',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Pending'
        ]
    ];

    $matchingRequests = collect($requests)->firstWhere('id_request', $id_request);

    if (!$matchingRequests) {
        abort(404, 'Tool not found');
    }

    return view('admin.detail-pengajuan-peminjaman-alat', [
        'title' => 'Peminjaman Alat & Barang',
        'subtitle' => "Pengajuan",
        'reqeusts' => $matchingRequests
    ]);
});

Route::get('/peminjaman-alat/berlangsung', function () {
    return view('admin.peminjaman-alat', ['title' => 'Peminjaman Alat & Barang', 'borrows' => [
        [
            'id_request' => 'Akbar1',
            'nama_peminjam' => 'Akbar Pratama Suryamin',
            'no_handphone' => '0852-0001-0002',
            'email' => 'akbar@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2, Barang3',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Dipinjam'
        ],
        [
            'id_request' => 'Miftahul5',
            'nama_peminjam' => 'Miftahul Rizqha',
            'no_handphone' => '0852-0001-0002',
            'email' => 'akbar@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2, Barang3',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Dikembalikan'
        ],
        [
            'id_request' => 'David6',
            'nama_peminjam' => 'David Suka Laksana',
            'no_handphone' => '0852-0001-0002',
            'email' => 'akbar@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2, Barang3',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Belum Kembali'
        ],
    ]]);
});

Route::get('/peminjaman-alat/berlangsung/{id}', function ($id_request) {
    $borrows = [
        [
            'id_request' => 'Akbar1',
            'nama_peminjam' => 'Akbar Pratama Suryamin',
            'no_handphone' => '0852-0001-0002',
            'email' => 'akbar@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2, Barang3',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Dipinjam'
        ],
        [
            'id_request' => 'Miftahul5',
            'nama_peminjam' => 'Miftahul Rizqha',
            'no_handphone' => '0852-0001-0002',
            'email' => 'akbar@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2, Barang3',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Dikembalikan'
        ],
        [
            'id_request' => 'David6',
            'nama_peminjam' => 'David Suka Laksana',
            'no_handphone' => '0852-0001-0002',
            'email' => 'akbar@gmail.com',
            'barang_dipinjam' => 'Barang1, Barang2, Barang3',
            'keperluan' => 'Keperluan Penelitian',
            'tanggal_pengajuan' => '15 Mei 2024 08:00 AM',
            'tanggal_kembali' => '20 Mei 2024 08:00 AM',
            'status_peminjaman' => 'Belum Kembali'
        ],
    ];

    $matchingBorrows = collect($borrows)->firstWhere('id_request', $id_request);

    if (!$matchingBorrows) {
        abort(404, 'Tool not found');
    }

    return view('admin.detail-peminjaman-alat', [
        'title' => 'Peminjaman Alat & Barang',
        'subtitle' => "Berlangsung",
        'peminjam' => $matchingBorrows
    ]);
});

//ANCHOR - Peminjaman Ruangan
Route::get('/peminjaman-ruangan', function () {
    return view('admin.peminjaman-ruangan', ['title' => 'Peminjaman Ruangan', 'roomBooking' => [
        [
            'id' => '1',
            'ruangan' => 'Lab 01',
            'tanggal_pemakaian' => '20 Oktober 2024',
            'waktu_pemakaian' => '08:00 AM - 12:00 PM',
            'nim' => '2000016129',
            'nama_peminjam' => 'Akbar Pratama Suryamin',
            'log_kegiatan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, accusamus! Vel laborum deserunt et totam eligendi? Atque aliquid perferendis fugit.'
        ],
        [
            'id' => '2',
            'ruangan' => 'Lab 01',
            'tanggal_pemakaian' => '20 Oktober 2024',
            'waktu_pemakaian' => '12:00 AM - 16:00 PM',
            'nim' => '2000016130',
            'nama_peminjam' => 'Miftahul Rizqha ( Istri Akbar)',
            'log_kegiatan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, accusamus! Vel laborum deserunt et totam eligendi? Atque aliquid perferendis fugit.'
        ],
        [
            'id' => '3',
            'ruangan' => 'Lab 01',
            'tanggal_pemakaian' => '21 Oktober 2024',
            'waktu_pemakaian' => '08:00 AM - 12:00 PM',
            'nim' => '2000016131',
            'nama_peminjam' => 'Alfarizi Dwi Putra Suryamin',
            'log_kegiatan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, accusamus! Vel laborum deserunt et totam eligendi? Atque aliquid perferendis fugit.'
        ],
        [
            'id' => '4',
            'ruangan' => 'Lab 02',
            'tanggal_pemakaian' => '20 Oktober 2024',
            'waktu_pemakaian' => '08:00 AM - 12:00 PM',
            'nim' => '2000016131',
            'nama_peminjam' => 'Alfarizi Dwi Putra Suryamin',
            'log_kegiatan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, accusamus! Vel laborum deserunt et totam eligendi? Atque aliquid perferendis fugit.'
        ]
    ]]);
});

Route::get('/jadwal-ruangan', function () {
    return view('admin.jadwal-ruangan', ['title' => 'Jadwal Ruangan', 'schedules' => [
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
            'name' => 'Rifky Ramadhan',
            'log' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsam voluptatem itaque sint maiores voluptas delectus corporis vero quae mollitia!',
            'waktu' => '16:00 - 17:00'
        ],
        [
            'nim' => '2000016006',
            'name' => 'Rifky Ramadhan',
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
