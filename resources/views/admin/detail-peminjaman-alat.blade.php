<x-layout>
    <x-slot:title>
        <a href="/peminjaman-alat/berlangsung">
            {{ $title }}
        </a>
    </x-slot:title>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <!--TODO Tambahkan halaman detail peminjaman untuk tiap peminjam nya agar menampilkan data (tanggal pinjam/kembali, Nama Peminjam, Barang dipinjam, no hp, email, keperluan, stauts peminjaman)-->

    <main class="bg-white rounded-xl shadow-md h-full p-4 relative">
        <div class="grid grid-cols-[20%_auto] border-b p-4">
            <div class="flex flex-col gap-2">
                <p>Nama peminjam</p>
                <p>Nomor handphone</p>
                <p>Email</p>
            </div>
            <div class="flex flex-col gap-2">
                <p class="flex gap-5"><span>:</span> {{ $peminjam['nama_peminjam'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $peminjam['no_handphone'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $peminjam['email'] }}</p>
            </div>
        </div>
        <div class="grid grid-cols-[20%_auto] p-4">
            <div class="flex flex-col gap-2">
                <p>Barang yang dipinjam</p>
                <p>Keperluan</p>
                <p>Tanggal pinjam</p>
                <p>Tanggal kembali</p>
                <p>Status Pengajuan</p>
            </div>
            <div class="flex flex-col gap-2">
                <p class="flex gap-5"><span>:</span> {{ $peminjam['barang_dipinjam'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $peminjam['keperluan'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $peminjam['tanggal_pengajuan'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $peminjam['tanggal_kembali'] }}</p>
                <p class="flex gap-5 w-fit ">
                    :
                    <span
                        class="px-2 py-1 rounded {{ $peminjam['status_peminjaman'] == 'Dipinjam' ? 'bg-yellow-100 text-yellow-600' : ($peminjam['status_peminjaman'] == 'Dikembalikan' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600') }}">{{ $peminjam['status_peminjaman'] }}</span>
                </p>
            </div>
        </div>
    </main>
</x-layout>
