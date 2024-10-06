<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex flex-col gap-4 h-full">
        <!-- ANCHOR Over View -->
        <section class="bg-[#f6fafd] p-4 rounded-xl flex flex-col gap-4 max-w-full">
            <h2 class="font-medium text-lg">Over View</h2>
            <article class="snap-start flex gap-10 ml-4 overflow-x-scroll scroll-pl-2 snap-x pb-2">
                <div
                    class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                    <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                        <x-heroicon-s-users class="w-6" />
                    </div>
                    <div>
                        <p class="font-semi-bold text-xl font-semibold">2</p>
                        <p class="text-gray-600 text-sm">Mahasiswa</p>
                    </div>
                </div>
                <div
                    class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                    <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                        <x-heroicon-s-cube class="w-6" />
                    </div>
                    <div>
                        <p class="font-semi-bold text-xl font-semibold">100</p>
                        <p class="text-gray-600 text-sm">Total Barang</p>
                    </div>
                </div>
                <div
                    class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                    <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                        <x-heroicon-s-inbox-arrow-down class="w-6" />
                    </div>
                    <div>
                        <p class="font-semi-bold text-xl font-semibold">20</p>
                        <p class="text-gray-600 text-sm">Pengajuan Peminjaman <br> Ruangan</p>
                    </div>
                </div>
                <div
                    class="snap-start border-1 bg-[#d0f1e673] p-2 flex gap-5 items-center rounded-xl border border-[#559f86] backdrop-brightness-200 min-w-fit">
                    <div class="p-3 bg-[#d0f1e6] rounded-md border border-[#559f86] min-h-fit">
                        <x-heroicon-s-square-3-stack-3d class="w-6" />
                    </div>
                    <div>
                        <p class="font-semi-bold text-xl font-semibold">20</p>
                        <p class="text-gray-600 text-sm">Pengajuan Peminjaman <br> Alat & Barang</p>
                    </div>
                </div>
                <div
                    class="snap-start border-1 bg-[#F7F4F3] p-2 flex gap-5 items-center rounded-xl border border-[#edbca0] backdrop-brightness-200 min-w-fit">
                    <div class="p-3 bg-[#F1DCD0] rounded-md border border-[#edbca0] min-h-fit flex items-center">
                        <x-heroicon-s-wrench-screwdriver class="w-6" />
                    </div>
                    <div>
                        <p class="font-semi-bold text-xl font-semibold">2</p>
                        <p class="text-gray-600 text-sm">Alat / Barang Rusak</p>
                    </div>
                </div>
            </article>
        </section>

        <div class=" grid grid-cols-2 gap-5 h-full">

            <!-- ANCHOR Penggunaan Ruangan -->
            <section class="bg-[#f6fafd] p-4 rounded-xl flex flex-col gap-4 max-w-full h-full">
                <h2 class="font-medium text-lg">Penggunaan Ruangan</h2>

                <!-- ANCHOR Filtering by lab dan tanggal -->
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
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
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

                <!-- ANCHOR Table -->
                <section class="flex flex-col justify-between  h-full">
                    <table class="table-auto w-full">
                        <thead class="">
                            <tr class="text-left">
                                <th class="border-b pl-2 py-2 border-slate-300 text-sm">No</th>
                                <th class="border-b pl-2 py-2 border-slate-300 text-sm">Peminjam</th>
                                <th class="border-b pl-2 py-2 border-slate-300 text-sm">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (collect($schedules)->sortBy(function ($schedule) {
        // Mengambil waktu mulai dari rentang waktu
        $startTime = explode(' - ', $schedule['waktu'])[0];
        return strtotime($startTime);
    }) as $schedule)
                                <tr class="schedule-row">
                                    <td class="border-b pl-2 py-2 border-slate-300 text-sm">{{ $loop->iteration }}</td>
                                    <td class="border-b pl-2 py-2 border-slate-300 text-sm">{{ $schedule['name'] }}</td>
                                    <td class="border-b pl-2 py-2 border-slate-300 text-sm">{{ $schedule['waktu'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="w-full text-[#559f86] flex justify-center mt-2">
                        <x-nav-link href="/jadwal-ruangan" :active="request()->is('jadwal-ruangan')">Lihat Selengkapnya</x-nav-link>
                    </div>
                </section>
            </section>

            <!-- ANCHOR Penggunaan Alat & Barang -->
            <section class="bg-[#f6fafd] p-4 rounded-xl flex flex-col gap-4 max-w-full">
                <h2 class="font-medium text-lg">Statistik Penggunaan Alat & Barang</h2>
            </section>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk mengubah jumlah item berdasarkan tinggi layar
            function updateScheduleLimit() {
                var rows = document.querySelectorAll('.schedule-row');
                var screenHeight = window.innerHeight;

                // Tentukan limit berdasarkan tinggi layar
                var limit = screenHeight < 1024 ? 4 : rows.length;

                // Sembunyikan atau tampilkan baris berdasarkan limit
                rows.forEach(function(row, index) {
                    if (index < limit) {
                        row.style.display = ''; // Tampilkan baris
                    } else {
                        row.style.display = 'none'; // Sembunyikan baris
                    }
                });
            }

            // Jalankan fungsi saat halaman pertama kali dimuat
            updateScheduleLimit();

            // Tambahkan listener untuk perubahan ukuran layar
            window.addEventListener('resize', updateScheduleLimit);
        });
    </script>
</x-layout>
