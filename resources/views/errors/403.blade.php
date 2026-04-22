{{-- Use Guest Layout --}}
<x-guest-layout>
  <div class="text-center">
    {{-- Decorative Icon --}}
    <div class="mb-8 flex justify-center">
      <div class="relative">
        {{-- Glow effect --}}
        <div class="absolute inset-0 w-24 h-24 md:w-32 md:h-32 bg-red-500/20 rounded-full blur-2xl"></div>
        {{-- Lock icon --}}
        <div
          class="relative w-20 h-20 md:w-28 md:h-28 rounded-3xl bg-gradient-to-br from-red-600 to-rose-600 flex items-center justify-center shadow-lg shadow-red-500/30">
          <svg class="w-10 h-10 md:w-14 md:h-14 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg>
        </div>
      </div>
    </div>

    {{-- 403 Number --}}
    <div class="mb-4">
      <h1 class="text-7xl md:text-9xl font-extrabold tracking-tight">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-rose-600 to-orange-600">403</span>
      </h1>
    </div>

    {{-- Title --}}
    <div class="mb-4">
      <h2 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight">
        Akses Ditolak
      </h2>
    </div>

    {{-- Description --}}
    <div class="mb-8 max-w-md mx-auto">
      <p class="text-slate-600 text-sm md:text-base leading-relaxed">
        Maaf, Anda tidak memiliki izin untuk mengakses halaman ini. Silakan hubungi administrator jika Anda membutuhkan
        akses.
      </p>
    </div>

    {{-- Action Buttons --}}
    <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">

      {{-- Secondary Button: Go Back --}}
      <button onclick="history.back()"
        class="group inline-flex items-center justify-center gap-2 border-2 border-slate-200 hover:border-red-500 text-slate-700 hover:text-white px-6 py-3 md:px-8 md:py-4 rounded-2xl font-bold text-sm md:text-base transition-all duration-300 hover:bg-red-500 hover:bg-red-600 w-full sm:w-auto">
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
        Jika Anda membutuhkan akses, silakan <a href="{{ route('profile.edit') }}"
          class="text-red-600 hover:text-red-700 font-medium transition-colors">hubungi administrator</a>
      </p>
    </div>
  </div>
</x-guest-layout>