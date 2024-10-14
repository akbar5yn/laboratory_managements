<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="h-full flex flex-col gap-4">
        <!-- SECTION Button pengajuan / peminjaman-->
        <section class="bg-white p-4 rounded-xl flex gap-4 max-w-full shadow-md">
            <a href="/peminjaman-alat/pengajuan"
                class="{{ request()->is('peminjaman-alat/pengajuan') ? 'bg-[#2D3648] text-white' : 'border-[2px] border-[#2D3648] text-[#2D3648]' }} px-4 py-2 rounded-lg">Pengajuan</a>
            <a href="/peminjaman-alat/berlangsung"
                class="{{ request()->is('peminjaman-alat/berlangsung') ? 'bg-[#2D3648] text-white' : 'border-[2px] border-[#2D3648] text-[#2D3648]' }} px-4 py-2 rounded-lg">Peminjaman</a>
        </section>

        <section class="bg-white rounded-xl shadow-md h-full overflow-y-scroll">
            <div class="p-4">
                <div
                    class="grid grid-cols-[4%_20%_25%_25%_15%_auto] border-b sticky z-10 top-0 bg-[#e4e4e4] border-gray-400 shadow items-center">
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        No</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        Tanggal Kembali</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        Nama Peminjam</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        Barang Dipinjam</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        Status</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full text-center">
                        Aksi</p>
                </div>

                @foreach ($borrows as $borrow)
                    <div class="border-b border-gray-400 grid grid-cols-[4%_20%_25%_25%_15%_auto]">
                        <p class="px-2 text-center py-2 border-r border-gray-400">{{ $loop->iteration }}</p>
                        <p class="px-2 py-2 border-r border-gray-400">{{ $borrow['tanggal_kembali'] }}</p>
                        <p class="px-2 py-2 border-r border-gray-400">{{ $borrow['nama_peminjam'] }}</p>
                        <p class="px-2 py-2 border-r border-gray-400 text-center">{{ $borrow['barang_dipinjam'] }}
                        <p class="px-2 py-2 border-r border-gray-400 text-center">
                            <span
                                class="px-2 py-1 rounded {{ $borrow['status_peminjaman'] == 'Dipinjam' ? 'bg-yellow-100 text-yellow-600' : ($borrow['status_peminjaman'] == 'Dikembalikan' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600') }}">

                                {{ $borrow['status_peminjaman'] }}
                            </span>
                        </p>
                        <div class="flex items-center justify-center gap-5">
                            <a href="/peminjaman-alat/berlangsung/{{ $borrow['id_request'] }}"
                                class="bg-blue-400 text-white px-2 rounded">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
</x-layout>
