@props([
    'active' => false,
    'src' => false,
])
<a {{ $attributes }}
    class="{{ $active ? 'active-dashboard bg-[#C8E0ED] text-[#265166] rounded-l-full shadow-lg' : '' }} flex items-center gap-3 p-2 relative text-sm"
    aria-current="{{ $active ? 'page' : false }}">

    {{ $slot }}

</a>
