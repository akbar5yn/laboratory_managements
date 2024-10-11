<header class="header h-[60px] bg-[#FFFFFF] py-5 px-4 flex justify-between items-center rounded-xl shadow-md">
    <div class="flex items-center gap-2">
        @if (isset($subtitle) && isset($subtitle))
            <h1 class="font-medium text-xl">{{ $title }}</h1>
            <x-heroicon-m-chevron-right class="w-5" />
            <h2 class="font-normal text-xl">{{ $subtitle }}</h2>
        @else
            <h1 class="font-medium text-xl">{{ $title }}</h1>
        @endif
    </div>
    <h4>Hi, Akbar Pratama S</h4>
</header>
