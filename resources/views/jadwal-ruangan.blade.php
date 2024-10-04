<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- ANCHOR Penggunaan Ruangan -->
    <div class="ruangan flex flex-col gap-4 h-full">

        <!-- SECTION Filtering by lab dan tanggal -->
        <section class="bg-[#f6fafd] p-4 rounded-xl flex flex-col gap-4 max-w-full shadow-md">
            <h2 class="font-semibold text-xl">Jadwal Ruangan</h2>

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

        </section>
        <!-- SECTION Table -->
        <section class="table h-full bg-[#f6fafd] rounded-xl overflow-hidden shadow-md">
            <div class="  grid grid-cols-[2%_10%_25%_40%_25%] gap-5 border-b ">
                <p class=" pl-2 py-2">No</p>
                <p class=" pl-2 py-2">NIM</p>
                <p class=" pl-2 py-2">Peminjam</p>
                <p class=" pl-2 py-2">Log</p>
                <p class=" pl-2 py-2">Waktu</p>
            </div>
            <div class="border-b h-full overflow-y-scroll shadow-inner">
                @foreach (collect($schedules)->sortBy(function ($schedule) {
        $startTime = explode(' - ', $schedule['waktu'])[0];
        return strtotime($startTime);
    }) as $schedule)
                    <div class="grid grid-cols-[2%_10%_25%_40%_25%] gap-5 border-b">
                        <p class="pl-2 py-2 ">{{ $loop->iteration }}</p>
                        <p class="pl-2 py-2 ">{{ $schedule['nim'] }}</p>
                        <p class="pl-2 py-2 ">{{ $schedule['name'] }}</p>
                        <p class="pl-2 py-2 ">{{ $schedule['log'] }}</p>
                        <p class="pl-2 py-2 ">{{ $schedule['waktu'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
