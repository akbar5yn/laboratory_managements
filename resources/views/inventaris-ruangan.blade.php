<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="inventaris h-full flex flex-col gap-4">
        <!-- SECTION Filtering, Searching, And Adding Rooms-->
        <section class="head-of-inventaris bg-white p-4 rounded-xl flex justify-between gap-4 max-w-full shadow-md">
            <div class="border-[2px] px-2 rounded-lg w-[400px] flex items-center p-[0.7px]">
                <label for="search">Search</label>
                <input type="search" id="search" class="auto border-none bg-transparent w-full p-1 focus:ring-0 ">
            </div>
            <div>
                <button class="bg-[#d0f1e6] px-5 py-2 rounded-lg border border-[#559f86] text-sm">Tambah Ruangan</button>
            </div>
        </section>

        <!-- SECTION Table of Content-->
        <section class="content-of-inventaris bg-white rounded-xl shadow-md h-full overflow-y-scroll">
            <div class="p-4">
                <div
                    class="grid grid-cols-[4%_30%_30%_15%_auto] border-b sticky z-10 top-0 bg-[#e4e4e4] border-gray-400 shadow items-center">
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        No</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        Nama Ruangan</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        Lokasi</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full border-r border-gray-400 text-center">
                        Kapasistas</p>
                    <p class="flex justify-center items-center px-2 py-2 h-full text-center">
                        Aksi</p>
                </div>

                @foreach ($rooms as $room)
                    <div class="border-b border-gray-400 grid grid-cols-[4%_30%_30%_15%_auto]">
                        <p class="px-2 text-center py-2 border-r border-gray-400">{{ $loop->iteration }}</p>
                        <p class="px-2 py-2 border-r border-gray-400">{{ $room['nama_ruangan'] }}</p>
                        <p class="px-2 py-2 border-r border-gray-400">{{ $room['lokasi_ruangan'] }}</p>
                        <p class="px-2 py-2 border-r border-gray-400 text-center">{{ $room['kapasitas'] }}
                            <span class="text-gray-500">(Orang)</span>
                        </p>
                        <div class="flex items-center justify-center gap-5">
                            <a href="/inventaris-alat/{{ $room['id_ruangan'] }}"
                                class="bg-blue-400 text-white px-2 rounded">Edit</a>
                            <a href="" class="bg-red-400 text-white px-2 rounded">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
</x-layout>
