{{-- ═══════════════════════════════════════════════════════════
GALLERY SECTION — Premium Fleet Showcase
═══════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-gray-50 relative overflow-hidden" id="gallery">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight mb-4">
                Galeri <span class="text-blue-600">Armada Kami</span>
            </h2>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                Dokumentasi unit kendaraan premium dan momen pelayanan terbaik kami untuk pelanggan setia.
            </p>
        </div>

        {{-- Bento-style Grid atau Masonry --}}
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
            @for ($i = 1; $i <= 12; $i++)
                <div class="group relative overflow-hidden rounded-3xl bg-white shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                    {{-- Ganti 'gallery-'.$i.'.jpg' dengan nama file aslimu nanti --}}
                    <img src="{{ asset('images/gallery/car-' . $i . '.jpeg') }}" 
                         alt="Rental Mobil Purwakarta"
                         class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-110"
                         loading="lazy"
                         onerror="this.src='https://placehold.co/600x800/e2e8f0/64748b?text=Unit+Rental+'+{{$i}}">
                    
                    {{-- Overlay on Hover --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-8">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <span class="inline-block px-3 py-1 bg-blue-600 text-white text-[10px] font-bold uppercase tracking-wider rounded-lg mb-2">Premium Unit</span>
                            <h4 class="text-white font-bold text-xl">Armada Terawat #{{$i}}</h4>
                            <p class="text-slate-300 text-xs mt-1">Siap menemani perjalanan Anda di Purwakarta</p>
                        </div>
                    </div>

                    {{-- Decorative Border --}}
                    <div class="absolute inset-0 border-2 border-blue-500/0 group-hover:border-blue-500/30 rounded-3xl transition-all duration-500 pointer-events-none"></div>
                </div>
            @endfor
        </div>
    </div>
</section>