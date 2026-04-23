@extends('layout.list')

@section('title', 'Koleksi Produk - Namonic')

@section('content')
    <section class="border-b border-gray-200 bg-white">
        <div class="container mx-auto p-6 grid grid-cols-2 gap-6 items-center">
            <div class="pr-12">
                <h2 class="text-xl md:text-2xl lg:text-4xl font-light leading-snug text-gray-800">
                    Hadirkan <span class="font-bold">kehangatan dalam setiap simpul;</span> koleksi produk rajutan tangan lokal Indonesia.
                </h2>
            </div>
            <div class="aspect-[16/9] border border-gray-300 rounded flex items-center justify-center overflow-hidden bg-gray-100">
                <img src="{{ asset('images/logoindex.png') }}" alt="foto" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <div class="container mx-auto px-6 py-10">
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-lg font-medium">Semua Produk</h3>
            <span class="text-sm text-gray-500">8 Produk</span>
        </div>

        <div class="grid grid-cols-4 gap-6">
            @foreach ($products as $product)
                {{-- Di sini kita panggil x-card yang isinya udah lu pindahin tadi --}}
                <x-card 
                    :title="$product['title']" 
                    :image="$product['image']" 
                    :desc="$product['desc']" 
                />
            @endforeach
        </div>
    </div>
@endsection