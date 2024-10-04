<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- ANCHOR Over View -->
    <section class="bg-[#f6fafd] p-4 rounded-md flex flex-col gap-4 max-w-full">
        <h2 class="font-semibold text-xl">Over View</h2>
        <article class="snap-start flex gap-10 ml-4 overflow-x-scroll scroll-pl-2 snap-x ">
            <div
                class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                    <x-heroicon-s-users class="w-8" />
                </div>
                <div>
                    <p class="font-semi-bold text-xl font-semibold">2</p>
                    <p class="text-gray-600">Mahasiswa</p>
                </div>
            </div>
            <div
                class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                    <x-heroicon-s-cube class="w-8" />
                </div>
                <div>
                    <p class="font-semi-bold text-xl font-semibold">100</p>
                    <p class="text-gray-600">Total Barang</p>
                </div>
            </div>
            <div
                class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                    <x-heroicon-s-inbox-arrow-down class="w-8" />
                </div>
                <div>
                    <p class="font-semi-bold text-xl font-semibold">20</p>
                    <p class="text-gray-600">Pengajuan Peminjaman <br> Ruangan</p>
                </div>
            </div>
            <div
                class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                    <x-heroicon-s-square-3-stack-3d class="w-8" />
                </div>
                <div>
                    <p class="font-semi-bold text-xl font-semibold">20</p>
                    <p class="text-gray-600">Pengajuan Peminjaman <br> Alat & Barang</p>
                </div>
            </div>
            <div
                class="snap-start border-1 bg-[#F7F4F3] p-2 flex gap-5 items-center rounded-xl border border-[#edbca0] backdrop-brightness-200 min-w-fit">
                <div class="p-3 bg-[#F1DCD0] rounded-md border border-[#edbca0] min-h-fit flex items-center">
                    <x-heroicon-s-wrench-screwdriver class="w-8" />
                </div>
                <div>
                    <p class="font-semi-bold text-xl font-semibold">2</p>
                    <p class="text-gray-600">Alat / Barang Rusak</p>
                </div>
            </div>
        </article>
    </section>

    <div class="mt-5 grid grid-cols-2 gap-5">

        <!-- ANCHOR Penggunaan Ruangan -->
        <section class="bg-[#f6fafd] p-4 rounded-md flex flex-col gap-4 max-w-full">
            <h2 class="font-semibold text-xl">Penggunaan Ruangan</h2>
            <section class="flex justify-between items-center">
                <div>
                    <div x-data="{ isOpen: false }" class="relative inline-block text-left">
                        <div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="inline-flex w-full justify-center gap-x-1.5 rounded-full border bg-white px-3 py-2 text-sm font-semibold shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Lab A
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
                            class="absolute left-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
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
                </div>
                <div>
                    <input type="date"
                        class="rounded-full border shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                </div>
            </section>
            <section class="">
                <table class="table-auto w-full">
                    <thead class="">
                        <tr class="text-left">
                            <th class="border-b pl-2 py-2 border-slate-300 ...">No</th>
                            <th class="border-b pl-2 py-2 border-slate-300 ...">Peminjam</th>
                            <th class="border-b pl-2 py-2 border-slate-300 ...">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="border-b pl-2 py-2 border-slate-300">1</td>
                            <td class="border-b pl-2 py-2 border-slate-300">Teguh Dwi Cahya Kusuma</td>
                            <td class="border-b pl-2 py-2 border-slate-300">07:00 - 12:00</td>
                        </tr>
                        <tr class="">
                            <td class="border-b pl-2 py-2 border-slate-300">2</td>
                            <td class="border-b pl-2 py-2 border-slate-300">Alfarizi Dwi Putra</td>
                            <td class="border-b pl-2 py-2 border-slate-300">07:00 - 12:00</td>
                        </tr>
                        <tr class="">
                            <td class="border-b pl-2 py-2 border-slate-300">3</td>
                            <td class="border-b pl-2 py-2 border-slate-300">Ansyafarino Arma Wahyudi</td>
                            <td class="border-b pl-2 py-2 border-slate-300">07:00 - 12:00</td>
                        </tr>
                        <tr class="">
                            <td class="border-b pl-2 py-2 border-slate-300">4</td>
                            <td class="border-b pl-2 py-2 border-slate-300">Ansyafarino Arma Wahyudi</td>
                            <td class="border-b pl-2 py-2 border-slate-300">07:00 - 12:00</td>
                        </tr>
                        <tr class="">
                            <td class="border-b pl-2 py-2 border-slate-300">5</td>
                            <td class="border-b pl-2 py-2 border-slate-300">Ansyafarino Arma Wahyudi</td>
                            <td class="border-b pl-2 py-2 border-slate-300">07:00 - 12:00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="w-full text-[#559f86] flex justify-center mt-2">
                    <a href="" class="px-4 py-2 rounded-md">Lihat Selengkapnya</a>
                </div>
            </section>
        </section>

        <!-- ANCHOR Penggunaan Alat & Barang -->
        <section class="bg-[#f6fafd] p-4 rounded-md flex flex-col gap-4 max-w-full">
            <h2 class="font-semibold text-xl">Statistik Penggunaan Alat & Barang</h2>
        </section>
    </div>
</x-layout>
