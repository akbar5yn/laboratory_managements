<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="inventaris h-full flex flex-col gap-4">

        <!-- SECTION Filtering, Searching, And Adding Tools-->
        <section class="head-of-inventaris bg-[#f6fafd] p-4 rounded-xl flex justify-between gap-4 max-w-full shadow-md">
            <div class="flex gap-3 items-center">
                <div id="kategori" x-data="{ isOpen: false }" class="relative inline-block text-left">
                    <div>
                        <button type="button" @click="isOpen = !isOpen"
                            class="inline-flex w-full justify-center gap-x-1.5 rounded-lg border bg-white px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Kategori Ruangan
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>


                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute left-0 z-50 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="menu-item-0">Lab A</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="menu-item-1">Lab B</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="menu-item-2">Lab C</a>
                        </div>
                    </div>
                </div>
                <div class="border-[2px] px-2 rounded-lg w-[400px] flex items-center p-[0.7px]">
                    <label for="search">Search</label>
                    <input type="search" id="search"
                        class="auto border-none bg-transparent w-full p-1 focus:ring-0 ">
                </div>
            </div>
            <div>
                <button class="bg-[#d0f1e6] px-5 py-2 rounded-lg border border-[#559f86] text-sm">Tambah Alat</button>
            </div>
        </section>

        <!-- SECTION Table of Content-->
        <section class="content-of-inventaris bg-[#f6fafd] rounded-xl shadow-md h-full overflow-y-scroll">
            <div class="grid grid-cols-[4%_25%_20%_12%_auto_10%] gap-5 border-b sticky z-10 top-0 bg-[#f6fafd] shadow">
                <p class=" pl-2 py-2 border-r">No</p>
                <p class=" pl-2 py-2 border-r">Nama Alat</p>
                <p class=" pl-2 py-2 border-r">Lokasi</p>
                <p class=" pl-2 py-2 border-r">Tahun Pengadaan</p>
                <p class=" pl-2 py-2 border-r">Fungsi Alat</p>
                <p class=" pl-2 py-2">Aksi</p>
            </div>

            @foreach (collect($tools)->sortBy(function ($tool) {
        $startTime = explode(' - ', $tool['tahun_pengadaan'])[0];
        return strtotime($startTime);
    }) as $tool)
                <div class="border-b grid grid-cols-[4%_25%_20%_12%_auto_10%] gap-5 ">
                    <p class="pl-2 py-2 border-r">{{ $loop->iteration }}</p>
                    <p class="pl-2 py-2 border-r">{{ $tool['nama_alat'] }}</p>
                    <p class="pl-2 py-2 border-r">{{ $tool['lokasi'] }}</p>
                    <p class="pl-2 py-2 border-r text-center">{{ $tool['tahun_pengadaan'] }}</p>
                    <p class="pl-2 py-2 border-r">{{ $tool['fungsi_alat'] }}</p>
                    <div class="flex items-center justify-center">
                        <div id="kategori" x-data="{ isOpen: false }" class="relative text-left">
                            <div>
                                <button type="button" @click="isOpen = !isOpen"
                                    class="inline-flex w-full justify-center gap-x-1.5 rounded-lg border bg-white p-1 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <x-heroicon-s-ellipsis-vertical class="w-5" />
                                </button>
                            </div>


                            <div x-show="isOpen" @click.outside="isOpen = false"
                                x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 z-50 mt-2 w-auto origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="/inventaris-alat/{{ $tool['id_alat'] }}"
                                        class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-0">Detail</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="menu-item-1">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </main>

</x-layout>
