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
                <a href="/dashboard"
                    class="{{ request()->is('dashboard') ? 'active-dashboard bg-[#C8E0ED] text-[#265166] rounded-l-full shadow-lg' : '' }} flex items-center gap-3 p-2 relative">
                    <img src="dashboard-icon-url.svg" class="w-6" alt="Dashboard Icon" />
                    Beranda
                </a>
            </li>
            <li class="rounded-full">
                <a href="/inventaris"
                    class="{{ request()->is('inventaris') ? 'active-dashboard bg-[#C8E0ED] text-[#265166] rounded-l-full w-full shadow-lg' : '' }} flex items-center gap-3 p-2 relative">
                    <img src="inventory-icon-url.svg" class="w-6" alt="Inventory Icon" />
                    Inventaris
                </a>
            </li>
            <li>
                <a href="/peminjaman"
                    class="{{ request()->is('peminjaman') ? 'bg-white text-[#285468]' : '' }} flex items-center gap-3 p-2 rounded-md">
                    <img src="borrowing-icon-url.svg" class="w-6" alt="Borrowing Icon" />
                    Peminjaman
                </a>
            </li>
            <li>
                <a href="/jadwal-ruangan"
                    class="{{ request()->is('jadwal-ruangan') ? 'bg-white text-[#285468]' : '' }} flex items-center gap-3 p-2 rounded-md">
                    <img src="schedule-icon-url.svg" class="w-6" alt="Schedule Icon" />
                    Jadwal Ruangan
                </a>
            </li>
            <li>
                <a href="/laporan"
                    class="{{ request()->is('laporan') ? 'bg-white text-[#285468]' : '' }} flex items-center gap-3 p-2 rounded-md">
                    <img src="report-icon-url.svg" class="w-6" alt="Report Icon" />
                    Reporting
                </a>
            </li>
            <li>
                <a href="/settings"
                    class="{{ request()->is('settings') ? 'bg-white text-[#285468]' : '' }} flex items-center gap-3 p-2 rounded-md">
                    <img src="settings-icon-url.svg" class="w-6" alt="Settings Icon" />
                    Laporan
                </a>
            </li>
        </ul>
    </section>
</main>
