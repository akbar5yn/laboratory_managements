<main class="hidden lg:w-[250px] bg-[#2D3648] lg:flex flex-col items-center rounded-xl relative">
    <!-- ANCHOR PROFILE -->
    <section class="flex flex-col justify-center items-center gap-4 font-poppins text-white px-10 py-4 h-[300px]">
        <div class="border-2 border-white rounded-full p-1">
            <img src="/img/avatar.png" alt="avatar" class="w-20 bg-white rounded-full p-1">
        </div>
        <div class="text-center">
            <h1 class="text-base">Akbar Pratama S</h1>
            <p class="font-light text-sm">Laboran</p>
        </div>
    </section>

    <!-- ANCHOR Menu -->
    <section class="sidebar w-full pl-5 overflow-y-scroll py-5 h-[80%] shadow-menu-inset">
        <ul class="font-poppins text-white space-y-4 w-full relative">
            <li class="relative">
                <x-nav-link href="/dashboard" :active="request()->is('dashboard')" :src="'img/dashboard-icon.svg'">
                    <x-heroicon-s-home
                        class="w-4 h-4 {{ request()->is('dashboard') ? 'text-[#265166]' : 'text-white' }}" />
                    Beranda
                </x-nav-link>
            </li>
            <li x-data="{ isOpen: window.location.pathname.includes('inventaris-alat') || window.location.pathname.includes('inventaris-ruangan') }">

                <button @click="isOpen = !isOpen" type="button" class="flex gap-3 p-2 w-full text-sm">
                    <x-heroicon-s-archive-box
                        class="w-4 h-4 {{ request()->is('inventaris') ? 'text-[#265166]' : 'text-white' }}" />
                    Inventaris
                    <x-heroicon-c-chevron-down
                        class="w-4 h-4 transform transition-transform duration-300 absolute right-10"
                        x-bind:class="isOpen ? '' : '-rotate-90'" />
                </button>
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <x-nav-link href="/inventaris-alat" :active="request()->is('inventaris-alat*')">
                        <span class="w-6"></span>
                        Alat & Barang</x-nav-link>
                    <x-nav-link href="/inventaris-ruangan" :active="request()->is('inventaris-ruangan')">
                        <span class="w-6"></span>
                        Ruangan</x-nav-link>
                </div>

            </li>
            <li x-data="{ isOpen: window.location.pathname.includes('peminjaman-alat/') || window.location.pathname.includes('peminjaman-ruangan') }">
                <button @click="isOpen = !isOpen" type="button" class="flex gap-3 p-2 w-full text-sm">
                    <x-heroicon-c-pencil-square class="w-4 h-4" />
                    Peminjaman
                    <x-heroicon-c-chevron-down
                        class="w-4 h-4 transform transition-transform duration-300 absolute right-10"
                        x-bind:class="isOpen ? '' : '-rotate-90'" />
                </button>
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                    <x-nav-link href="/peminjaman-alat/pengajuan" :active="request()->is('peminjaman-alat*')"> <span class="w-6"></span> Alat &
                        Barang</x-nav-link>
                    <x-nav-link href="/peminjaman-ruangan" :active="request()->is('peminjaman-ruangan')"> <span class="w-6"></span>
                        Ruangan</x-nav-link>
                </div>
            </li>
            <li>
                <x-nav-link href="/jadwal-ruangan" :active="request()->is('jadwal-ruangan')">
                    <x-heroicon-c-calendar-date-range
                        class="w-4 h-4 {{ request()->is('jadwal-ruangan') ? 'text-[#265166]' : 'text-white' }}" />
                    Jadwal Ruangan</x-nav-link>
            </li>
            <li>
                <x-nav-link href="/laporan" :active="request()->is('laporan')">
                    <x-heroicon-m-clipboard-document-list
                        class="w-4 h-4 {{ request()->is('laporan') ? 'text-[#265166]' : 'text-white' }}" />
                    Laporan</x-nav-link>
            </li>
            <li>
                <x-nav-link href="/pendaftaran-pratikum" :active="request()->is('pendaftaran-pratikum')">
                    <x-heroicon-s-document-arrow-up
                        class="w-4 h-4 {{ request()->is('pendaftaran-pratikum') ? 'text-[#265166]' : 'text-white' }}" />
                    Pendaftaran Praktikum</x-nav-link>
            </li>
        </ul>

    </section>
    <section class="w-full h-[20%] flex items-center justify-center">
        <button class="font-poppins text-white flex gap-3 items-center text-sm">
            <x-heroicon-m-arrow-left-start-on-rectangle class="w-4 h-4 text-white" />
            Logout</button>
    </section>
</main>
