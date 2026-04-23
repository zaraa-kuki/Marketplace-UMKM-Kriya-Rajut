<div class="border border-gray-200 rounded-lg bg-white overflow-hidden hover:shadow-md transition">
    <div class="aspect-square border-b border-gray-200 flex items-center justify-center bg-gray-100 overflow-hidden">
        <img src="{{ asset('images/' . $image) }}" 
             alt="{{ $title }}" 
             class="w-full h-full object-cover">
    </div>

    <div class="p-5">
        <h4 class="font-semibold text-lg capitalize">{{ $title }}</h4>
        <p class="text-xs text-gray-600 mt-2 mb-6 leading-relaxed">
            {{ $desc }}
        </p>
        <a href="/list_barang" class="inline-block w-full border border-gray-300 rounded-md text-center text-xs font-medium py-2 hover:bg-gray-100">
            Lihat Detail
        </a>
    </div>
</div>