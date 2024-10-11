<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <main class="flex w-full h-full gap-4">
        <section class="content-of-inventaris bg-white rounded-xl shadow-md h-full overflow-y-scroll w-[75%]">
            <div class="p-4">
                <div
                    class="grid grid-cols-[4%_20%_20%_15%_15%_auto] border-b border-gray-400 sticky z-50 top-0 bg-[#e4e4e4] shadow ">
                    <p class=" px-2 py-2 flex justify-center items-center border-r border-gray-400 text-center">No</p>
                    <p class=" px-2 py-2 flex justify-center items-center border-r border-gray-400 text-center">Id Alat
                    </p>
                    <p class=" px-2 py-2 flex justify-center items-center border-r border-gray-400 text-center">Nomor
                        Unit</p>
                    <p class=" px-2 py-2 flex justify-center items-center border-r border-gray-400 text-center">Status
                        Alat</p>
                    <p class=" px-2 py-2 flex justify-center items-center border-r border-gray-400 text-center">Kondisi
                    </p>
                    <p class=" px-2 py-2 flex justify-center items-center text-center">Aksi</p>
                </div>

                @foreach ($tools as $tool)
                    <div class="border-b border-gray-400 grid grid-cols-[4%_20%_20%_15%_15%_auto]">
                        <p class="px-2 py-2 text-center border-r border-gray-400">{{ $loop->iteration }}</p>
                        <p class="px-2 py-2 border-r border-gray-400">{{ $tool['id_alat'] }}</p>
                        <p class="px-2 py-2 border-r border-gray-400">{{ $tool['no_unit'] }}</p>
                        <p class="px-2 py-2 border-r border-gray-400">
                            <span
                                class="px-2 py-1 rounded 
                                {{ $tool['status'] == 'Tersedia' ? 'bg-green-100 text-green-600' : ($tool['status'] == 'Dipinjam' ? 'bg-yellow-100 text-yellow-600' : 'bg-red-100 text-red-600') }}">
                                {{ $tool['status'] }}
                            </span>
                        </p>
                        <p class="pl-2 py-2 border-r border-gray-400">
                            <span
                                class="px-2 py-1 rounded 
                                {{ $tool['kondisi'] == 'Normal' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                                {{ $tool['kondisi'] }}
                            </span>
                        </p>

                        <div class="flex items-center justify-center gap-5 w-full">
                            <button class="bg-blue-400 text-white px-2 rounded">Kondisi</button>
                            <button class="bg-red-400 text-white px-2 rounded">Delete</button>
                        </div>
                    </div>
                @endforeach
            </div>


        </section>
        <section class="content-of-inventaris bg-white rounded-xl shadow-md h-full w-[25%] p-4 flex flex-col gap-3">
            <h1 class="text-lg font-medium">Informasi Alat dan Barang</h1>
            <div class="grid grid-cols-2 p-2">
                <p class=" border border-gray-300 p-2 bg-green-100 text-green-600 rounded-t-md">Tersedia</p>
                <p class=" border border-gray-300 p-2 text-center bg-green-100 text-green-600 rounded-t-md">2</p>
                <p class=" border border-gray-300 p-2 bg-yellow-100 text-yellow-600">Dipinjam</p>
                <p class=" border border-gray-300 p-2 bg-yellow-100 text-yellow-600 text-center">1</p>
                <p class=" border border-gray-300 p-2 bg-red-100 text-red-600">Rusak</p>
                <p class=" border border-gray-300 p-2 bg-red-100 text-red-600 text-center">0</p>
                <p class=" border border-gray-300 p-2 bg-blue-100 text-blue-600 rounded-b-md">Total Alat</p>
                <p class=" border border-gray-300 p-2 bg-blue-100 text-blue-600 text-center rounded-b-md">3</p>
            </div>
        </section>
    </main>
</x-layout>
