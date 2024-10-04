<main class="hidden lg:w-[250px] bg-[#265166] lg:flex flex-col items-center fixed gap-16 lg:min-h-screen">
    <!-- ANCHOR PROFILE -->
    <section class="flex flex-col justify-center items-center gap-4 font-poppins text-white px-10 py-4">
        <div class="border-2 border-white rounded-full p-1">
            <img src="img/avatar.png" alt="avatar" class="w-20 bg-white rounded-full p-1">
        </div>
        <div class="text-center">
            <h1>Akbar Pratama S</h1>
            <p class="font-light text-sm">Laboran</p>
        </div>
    </section>

    <!-- ANCHOR Menu -->
    <section class="sidebar w-full pl-5">
        <ul class="font-poppins text-white space-y-6 w-full relative">
            <li class="relative">
                <x-nav-link href="/dashboard" :active="request()->is('dashboard')" :src="'img/dashboard-icon.svg'">
                    <x-heroicon-s-home
                        class="w-6 h-6 {{ request()->is('dashboard') ? 'text-[#265166]' : 'text-white' }}" />
                    Beranda
                </x-nav-link>
            </li>
            <li class="rounded-full">
                <x-nav-link href="/inventaris" :active="request()->is('inventaris')">
                    <x-heroicon-s-archive-box
                        class="w-6 h-6 {{ request()->is('inventaris') ? 'text-[#265166]' : 'text-white' }}" />
                    Inventaris</x-nav-link>
            </li>
            <li>
                <x-nav-link href="/peminjaman" :active="request()->is('peminjaman')">
                    <x-heroicon-c-pencil-square
                        class="w-6 h-6 {{ request()->is('peminjaman') ? 'text-[#265166]' : 'text-white' }}" />
                    Peminjaman</x-nav-link>
            </li>
            <li>
                <x-nav-link href="/jadwal-ruangan" :active="request()->is('jadwal-ruangan')">
                    <x-heroicon-c-calendar-date-range
                        class="w-6 h-6 {{ request()->is('jadwal-ruangan') ? 'text-[#265166]' : 'text-white' }}" />
                    Jadwal Ruangan</x-nav-link>
            </li>
            <li>
                <x-nav-link href="/laporan" :active="request()->is('laporan')">
                    <x-heroicon-m-clipboard-document-list
                        class="w-6 h-6 {{ request()->is('laporan') ? 'text-[#265166]' : 'text-white' }}" />
                    Laporan</x-nav-link>
            </li>
        </ul>
    </section>
</main>
