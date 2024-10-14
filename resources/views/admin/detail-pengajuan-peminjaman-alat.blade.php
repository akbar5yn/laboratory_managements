<x-layout>
    <x-slot:title>
        <a href="/peminjaman-alat/pengajuan">
            {{ $title }}
        </a>
    </x-slot:title>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>

    <main class="bg-white rounded-xl shadow-md h-full p-4 relative">
        <div class="grid grid-cols-[20%_auto] border-b p-4">
            <div class="flex flex-col gap-2">
                <p>Nama peminjam</p>
                <p>Nomor handphone</p>
                <p>Email</p>
            </div>
            <div class="flex flex-col gap-2">
                <p class="flex gap-5"><span>:</span> {{ $reqeusts['nama_peminjam'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $reqeusts['no_handphone'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $reqeusts['email'] }}</p>
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
                <p class="flex gap-5"><span>:</span> {{ $reqeusts['barang_dipinjam'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $reqeusts['keperluan'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $reqeusts['tanggal_pengajuan'] }}</p>
                <p class="flex gap-5"><span>:</span> {{ $reqeusts['tanggal_kembali'] }}</p>
                <p class="flex gap-5 text-yellow-500"><span
                        class="text-black">:</span>{{ $reqeusts['status_peminjaman'] }}</p>
            </div>
        </div>
        <!--TODO Tambahkan buttom Setujui dan tolak yang dimana berfungsi untuk persetujuan dari admin setelah mahasiswa melakukan barcode-->
        <div class="absolute bottom-10 right-10 flex gap-2" x-data="{ showTolak: false, showSetujui: false, isDisabled: true }">
            <!-- Tombol Tolak dengan Tooltip -->
            <div class="relative group" @mouseenter="isDisabled && (showTolak = true)" @mouseleave="showTolak = false">
                <button type="button" :disabled="isDisabled"
                    class="px-5 rounded-md py-1 border border-[#9f5555] bg-[#f1d0d0] disabled:border-none disabled:bg-gray-200 disabled:text-gray-500">
                    Tolak
                </button>
                <!-- Tooltip -->
                <div x-show="showTolak" x-transition:enter="transition-opacity duration-300"
                    x-transition:leave="transition-opacity duration-300"
                    class="absolute bottom-full mb-2 w-[200px] text-center right-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-2 py-1 bg-black text-white text-sm rounded">
                    Tombol akan aktif setelah mahasiswa melakukan scan barcode
                    <div
                        class="absolute top-full right-8 w-0 h-0 border-l-8 border-r-8 border-t-8 border-t-black border-l-transparent border-r-transparent">
                    </div>
                </div>

            </div>

            <!-- Tombol Setujui dengan Tooltip -->
            <div class="relative group" @mouseenter="isDisabled && (showSetujui = true)"
                @mouseleave="showSetujui = false">
                <button type="button" :disabled="isDisabled"
                    class="px-5 rounded-md py-1 border border-[#559f86] bg-[#d0f1e6] disabled:border-none disabled:bg-gray-200 disabled:text-gray-500">
                    Setujui
                </button>
                <!-- Tooltip -->
                <div x-show="showSetujui" x-transition:enter="transition-opacity duration-300"
                    x-transition:leave="transition-opacity duration-300"
                    class="absolute bottom-full mb-2 w-[200px] text-center right-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-2 py-1 bg-black text-white text-sm rounded">
                    Tombol akan aktif setelah mahasiswa melakukan scan barcode
                    <div
                        class="absolute top-full right-10 w-0 h-0 border-l-8 border-r-8 border-t-8 border-t-black border-l-transparent border-r-transparent">
                    </div>
                </div>
            </div>
        </div>

    </main>
</x-layout>
