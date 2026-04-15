<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajut UMKM - Namonic</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Tipografi font sans-serif yang bersih */
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <header class="border-b border-gray-200 bg-white">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-12 h-10 border border-gray-300 flex items-center justify-center text-xs text-gray-400 bg-gray-100">
                    logo
                </div>
                <h1 class="text-xl font-bold">Rajut UMKM</h1>
            </div>

            <div class="w-full max-w-lg px-6">
                <input type="text" placeholder="Telusuri..." class="w-full border border-gray-300 rounded px-4 py-2 text-sm focus:border-gray-500 focus:ring-0 outline-none">
            </div>

            <div class="flex items-center gap-6">
                <div class="relative w-8 h-8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-black text-[10px] font-bold text-white">2</span>
                </div>
                <div class="relative w-8 h-8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-black text-[10px] font-bold text-white">5</span>
                </div>
            </div>
        </div>
    </header>

    <nav class="border-b border-gray-200 bg-white">
        <div class="container mx-auto px-6 py-3 flex justify-center gap-12 text-sm text-gray-600">
            <a href="#" class="font-medium text-black">Semua</a>
            <a href="#" class="hover:text-black">Pakaian</a>
            <a href="#" class="hover:text-black">Aksesoris</a>
            <a href="#" class="hover:text-black">Dekorasi</a>
            <a href="#" class="hover:text-black">Amigurumi</a>
            <a href="#" class="hover:text-black">Tas & Wadah</a>
        </div>
    </nav>

    <section class="border-b border-gray-200 bg-white">
        <div class="container mx-auto p-6 grid grid-cols-2 gap-6 items-center">
            <div class="pr-12">
                <h2 class="text-3xl font-light leading-snug">
                    Produk rajutan tangan lokal Indonesia yang dibuat dengan sepenuh hati.
                </h2>
            </div>
            <div class="aspect-[16/9] border border-gray-300 rounded flex items-center justify-center text-xl text-gray-400 bg-gray-100">
                foto produk
            </div>
        </div>
    </section>

    <main class="container mx-auto px-6 py-10">
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-lg font-medium">Semua Produk</h3>
            <span class="text-sm text-gray-500">8 Produk</span>
        </div>

        <div class="grid grid-cols-4 gap-6">
            
            @php
                $products = array_fill(0, 8, [
                    'title' => 'tas rajut',
                    'desc' => 'Tas rajut handmade dengan material benang katun premium yang lembut dan kuat.'
                ]);
            @endphp

            @foreach ($products as $product)
            <div class="border border-gray-200 rounded-lg bg-white overflow-hidden hover:shadow-md transition">
                <div class="aspect-square border-b border-gray-200 flex items-center justify-center bg-gray-100 text-gray-400">
                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div class="p-5">
                    <h4 class="font-semibold text-lg capitalize">{{ $product['title'] }}</h4>
                    <p class="text-xs text-gray-600 mt-2 mb-6 leading-relaxed">
                        {{ $product['desc'] }}
                    </p>
                    <a href="/list_barang" class="inline-block w-full border border-gray-300 rounded-md text-center text-xs font-medium py-2 hover:bg-gray-100">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </main>

    <footer class="border-t border-gray-200 bg-white mt-10">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-4 gap-6 mb-12">
                <div>
                    <h5 class="font-semibold mb-4 text-sm">Tautan Cepat</h5>
                    <ul class="space-y-2 text-xs text-gray-600">
                        <li><a href="#" class="hover:text-black">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-black">Pesanan Pelanggan</a></li>
                        <li><a href="#" class="hover:text-black">Lacak Pesanan</a></li>
                    </ul>
                </div>
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="border-t border-gray-200 pt-8 flex items-center justify-between text-xs text-gray-500">
                <div class="flex gap-12">
                    <span>alamat marketplace</span>
                    <span>nomor hp</span>
                    <a href="mailto:rajut@gmail.com" class="hover:text-black">rajut@gmail.com</a>
                </div>
                <span>Made with ♥ for gift lovers</span>
            </div>

            <div class="border-t border-gray-200 mt-8 pt-8 flex justify-center text-[11px] text-gray-400">
                <span>© 2025 GiftHub. All rights reserved.</span>
            </div>
        </div>
    </footer>

</body>
</html>