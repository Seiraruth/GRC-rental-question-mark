{{-- ═══════════════════════════════════════════════════════════
FEATURES SECTION
═══════════════════════════════════════════════════════════ --}}
<section class="py-28 relative overflow-hidden bg-white" id="about">
  {{-- Subtle background pattern --}}
  <div
    class="absolute inset-0 opacity-[0.025] pointer-events-none bg-[radial-gradient(circle,#1d4ed8_1px,transparent_1px)] bg-[length:40px_40px]">
  </div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Section Header --}}
    <div class="text-center mb-20">
      <div
        class="inline-flex items-center gap-2 mb-5 px-5 py-2 rounded-full bg-blue-600/[0.07] border border-blue-600/15">
        <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
          <polyline points="20 6 9 17 4 12" />
        </svg>
        <span class="text-blue-700 text-xs font-bold tracking-[0.15em] uppercase">Keunggulan Kami</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight mb-5 leading-tight">
        Mengapa Memilih<br>
        <span class="text-blue-600">Pusat Rentcar Purwakarta?</span>
      </h2>
      <p class="text-lg text-slate-500 max-w-lg mx-auto leading-relaxed">
        Kami berkomitmen memberikan pengalaman rental terbaik dengan standar layanan premium
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($features as $i => $f)
        <div class="group relative p-8 rounded-3xl transition-all duration-500 hover:-translate-y-2 cursor-default
                             bg-white border border-slate-100 shadow-sm
                             hover:shadow-xl hover:shadow-black/[0.08]"
          style="--color: {{ $f['color'] }}; --bg: {{ $f['bg'] }};">

          {{-- Icon --}}
          <div
            class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110 bg-[var(--bg)]">
            <svg class="w-8 h-8 text-[var(--color)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="{{ $f['icon'] }}" />
            </svg>
          </div>

          {{-- Number --}}
          <div
            class="absolute top-7 right-7 text-5xl font-black opacity-[0.04] select-none text-[var(--color)] leading-none">
            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
          </div>

          <h3 class="text-lg font-black text-slate-900 mb-3">{{ $f['title'] }}</h3>
          <p class="text-slate-500 text-sm leading-relaxed">{{ $f['desc'] }}</p>

          {{-- Bottom accent line --}}
          <div class="absolute bottom-0 left-8 right-8 h-0.5 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500
                                 bg-gradient-to-r from-[var(--color)] to-transparent">
          </div>

          {{-- Dynamic border hover color --}}
          <div
            class="absolute inset-0 rounded-3xl border border-[var(--color)] opacity-0 group-hover:opacity-100 transition-all duration-500 pointer-events-none">
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>