<header class="sticky top-0 z-50 shadow-md">
    
    <div class="bg-[#1a2b3c] py-4">
        <div class="container mx-auto px-6 flex items-center justify-between"> 
            <div class="flex items-center gap-4">
                <div class="w-12 h-10 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="max-w-full max-h-full object-contain">
                </div>
                <h1 class="text-xl font-bold text-white whitespace-nowrap">Kriya Rajut</h1>
            </div>

            <div class="flex-1 max-w-lg mx-10">
                <input type="text" placeholder="Telusuri..." class="w-full bg-gray-800 border border-gray-600 rounded px-4 py-2 text-sm text-white outline-none focus:border-white">
            </div>

            <div class="flex items-center gap-6"> 
                <div class="relative w-8 h-8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-black text-[10px] font-bold text-white">2</span>
                </div>
                <div class="relative w-8 h-8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-black text-[10px] font-bold text-white">5</span>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-6 py-3">

            <div class="flex justify-center items-center gap-6 text-sm text-gray-600">
                <a href="{{ url('/produk-namonic') }}" 
                class="px-4 py-1.5 rounded-full font-medium transition-all {{ request()->is('produk-namonic') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">Semua</a>
                
                <a href="{{ url('/kategori/pakaian') }}" 
                class="px-4 py-1.5 rounded-full font-medium transition-all {{ request()->is('kategori/pakaian') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">Pakaian</a>

                <a href="{{ url('/kategori/aksesoris') }}" 
                class="px-4 py-1.5 rounded-full font-medium transition-all {{ request()->is('kategori/aksesoris') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">Aksesoris</a>

                <a href="{{ url('/kategori/dekorasi') }}" 
                class="px-4 py-1.5 rounded-full font-medium transition-all {{ request()->is('kategori/dekorasi') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">Dekorasi</a>

                <a href="{{ url('/kategori/amigurumi') }}" 
                class="px-4 py-1.5 rounded-full font-medium transition-all {{ request()->is('kategori/amigurumi') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">Amigurumi</a>

                <a href="{{ url('/kategori/tas-wadah') }}" 
                class="px-4 py-1.5 rounded-full font-medium transition-all {{ request()->is('kategori/tas-wadah') ? 'bg-black text-white' : 'hover:bg-gray-100' }}">Tas & Wadah</a>
            </div>

        </div>
    </div>

</header>