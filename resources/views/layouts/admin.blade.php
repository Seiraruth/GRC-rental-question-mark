<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50" x-data="{ open: false }">
  <div class="flex min-h-screen overflow-hidden">

    @include('layouts.navigation')

    <div class="flex-1 flex flex-col min-h-screen transition-all duration-300 bg-gray-50 md:ml-64">

      <header class="md:hidden bg-white border-b px-4 py-3 flex items-center justify-between sticky top-0 z-20">
        <span class="font-bold text-emerald-600">GRC Admin</span>
        <button @click="open = true" class="p-2 rounded-lg bg-gray-100 text-gray-600">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </header>

      @if (isset($header))
        <header class="bg-white border-b border-gray-100 sticky top-0 z-10 hidden md:block">
          <div class="px-8 py-5">
            {{ $header }}
          </div>
        </header>
      @endif

      <main class="flex-1 p-4 sm:p-6 lg:p-8">
        {{ $slot }}
      </main>
    </div>
  </div>

  @if(session('success'))
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'success',
          title: 'Berhasil!',
          text: @json(session('success')),
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          customClass: {
            popup: 'rounded-xl shadow-lg border border-emerald-100 bg-white/90 backdrop-blur-md',
          }
        });
      });
    </script>
  @endif

  @if(session('error'))
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: @json(session('error')),
          confirmButtonColor: '#ef4444',
        });
      });
    </script>
  @endif
</body>

</html>