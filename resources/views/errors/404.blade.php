{{-- Use Guest Layout --}}
<x-guest-layout>
  <div class="text-center">
    {{-- Decorative Icon --}}
    <div class="mb-8 flex justify-center">
      <div class="relative">
        {{-- Glow effect --}}
        <div class="absolute inset-0 w-24 h-24 md:w-32 md:h-32 bg-blue-500/20 rounded-full blur-2xl"></div>
        {{-- Search/compass icon --}}
        <div
          class="relative w-20 h-20 md:w-28 md:h-28 rounded-3xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center shadow-lg shadow-blue-500/30">
          <svg class="w-10 h-10 md:w-14 md:h-14 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.35-4.35" />
            <path d="M8 8l6 6" />
            <path d="M14 8l-6 6" />
          </svg>
        </div>
      </div>
    </div>

    {{-- 404 Number --}}
    <div class="mb-4">
      <h1 class="text-7xl md:text-9xl font-extrabold tracking-tight">
        <span
          class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">404</span>
      </h1>
    </div>

    {{-- Title --}}
    <div class="mb-4">
      <h2 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight">
        Halaman Tidak Ditemukan
      </h2>
    </div>

    {{-- Description --}}
    <div class="mb-8 max-w-md mx-auto">
      <p class="text-slate-600 text-sm md:text-base leading-relaxed">
        Maaf, halaman yang Anda cari tidak dapat ditemukan. Mungkin telah dipindahkan, dihapus, atau Anda memasukkan URL
        yang salah.
      </p>
    </div>

    {{-- Action Buttons --}}
    <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">

      {{-- Secondary Button: Go Back --}}
      <button onclick="history.back()"
        class="group inline-flex items-center justify-center gap-2 border-2 border-slate-200 hover:border-blue-500 text-slate-700 hover:text-white px-6 py-3 md:px-8 md:py-4 rounded-2xl font-bold text-sm md:text-base transition-all duration-300 hover:bg-blue-500 hover:bg-blue-600 w-full sm:w-auto">
        <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5" />
          <path d="M12 19l-7-7 7-7" />
        </svg>
        Kembali ke Halaman Sebelumnya
      </button>
    </div>

    {{-- Help Text --}}
    <div class="mt-8 pt-6 border-t border-slate-200">
      <p class="text-slate-500 text-xs md:text-sm">
        Jika masalah berlanjut, silakan <a href="{{ route('profile.edit') }}"
          class="text-blue-600 hover:text-blue-700 font-medium transition-colors">hubungi kami</a>
      </p>
    </div>
  </div>
</x-guest-layout>