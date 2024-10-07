<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <main>
        <section class="content-of-inventaris bg-[#f6fafd] rounded-xl shadow-md h-full overflow-y-scroll">
            <div class="grid grid-cols-[4%_25%_20%_12%_auto_10%] gap-5 border-b sticky z-50 top-0 bg-[#f6fafd] shadow">
                <p class=" pl-2 py-2 border-r">No</p>
                <p class=" pl-2 py-2 border-r">Id Alat</p>
                <p class=" pl-2 py-2 border-r">Nomor Unit</p>
                <p class=" pl-2 py-2 border-r">Status Alat</p>
                <p class=" pl-2 py-2 border-r">Kondisi</p>
                <p class=" pl-2 py-2">Aksi</p>
            </div>

            @foreach ($tools as $tool)
                <div class="border-b grid grid-cols-[4%_25%_20%_12%_auto_10%] gap-5 ">
                    <p class="pl-2 py-2 border-r">{{ $loop->iteration }}</p>
                    <p class="pl-2 py-2 border-r">{{ $tool['id_alat'] }}</p>
                    <p class="pl-2 py-2 border-r">{{ $tool['no_unit'] }}</p>
                    <p class="pl-2 py-2 border-r">{{ $tool['status'] }}</p>
                    <p class="pl-2 py-2 border-r">{{ $tool['kondisi'] }}</p>

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
                                class="absolute right-0 z-10 mt-2 w-auto origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
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
