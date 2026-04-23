<footer class="bg-[#1a2b3c] text-gray-300 py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            
            <div>
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider">Tentang Kami</h4>
                <p class="text-sm leading-relaxed">
                    Namonic adalah marketplace kriya rajut yang menghadirkan kehangatan dalam setiap simpul tangan lokal Indonesia.
                </p>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider">Tautan Cepat</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Katalog Produk</a></li>
                    <li><a href="#" class="hover:text-white transition">Pesanan Pelanggan</a></li>
                    <li><a href="#" class="hover:text-white transition">Kebijakan Pengembalian</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider">Kontak Kami</h4>
                <ul class="space-y-2 text-sm">
                    <li>WA: +62 812-XXXX-XXXX</li>
                    <li>Email: rajut@gmail.com</li>
                    <li>IG: @namonic.kriya</li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider">Bantuan</h4>
                <p class="text-sm mb-4">Cek status pesananmu di sini:</p>
                
                <form action="/lacak-pesanan" method="GET" class="space-y-2">
                    <div>
                        <input type="text" name="order_number" placeholder="Nomor Pesanan" 
                            class="w-full bg-gray-800 border border-gray-700 rounded px-3 py-2 text-xs text-white outline-none focus:border-white transition">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email Anda" 
                            class="w-full bg-gray-800 border border-gray-700 rounded px-3 py-2 text-xs text-white outline-none focus:border-white transition">
                    </div>
                    <button type="submit" 
                        class="w-full bg-white text-[#1a2b3c] py-2 rounded text-[10px] font-bold uppercase hover:bg-gray-200 transition tracking-widest">
                        Cek Sekarang
                    </button>
                </form>
            </div>

        </div>

        <div class="border-t border-gray-700 mt-12 pt-8 text-center text-xs">
            <p>© 2026 Namonic Kriya Rajut. All rights reserved.</p>
            <p class="mt-2 text-gray-500 italic">Made with ♥ for gift lovers</p>
        </div>
    </div>
</footer>