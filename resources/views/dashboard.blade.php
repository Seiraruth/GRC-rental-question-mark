{{-- Use Admin Layout --}}

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-sm text-gray-500">Total Mobil</p>
                        <p class="mt-2 text-3xl font-bold text-gray-900">{{ $totalCars }}</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-sm text-gray-500">Mobil Tersedia</p>
                        <p class="mt-2 text-3xl font-bold text-emerald-600">{{ $availableCars }}</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-sm text-gray-500">Booking Pending</p>
                        <p class="mt-2 text-3xl font-bold text-amber-600">{{ $pendingBookings }}</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Booking Terbaru</h3>
                            <a href="{{ route('admin.bookings.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-700">
                                Lihat semua
                            </a>
                        </div>

                        @if ($recentBookings->isEmpty())
                            <p class="text-sm text-gray-500">Belum ada data booking.</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full text-sm">
                                    <thead>
                                        <tr class="text-left text-gray-500 border-b">
                                            <th class="py-2 pr-3">Kode</th>
                                            <th class="py-2 pr-3">Penyewa</th>
                                            <th class="py-2 pr-3">Status</th>
                                            <th class="py-2 text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recentBookings as $booking)
                                            <tr class="border-b last:border-0">
                                                <td class="py-3 pr-3 font-medium text-gray-800">{{ $booking->booking_code }}</td>
                                                <td class="py-3 pr-3 text-gray-700">{{ $booking->customer_name }}</td>
                                                <td class="py-3 pr-3">
                                                    <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium
                                                        {{ $booking->status === 'pending' ? 'bg-amber-100 text-amber-700' : 'bg-emerald-100 text-emerald-700' }}">
                                                        {{ ucfirst($booking->status) }}
                                                    </span>
                                                </td>
                                                <td class="py-3 text-right text-gray-700">Rp {{ number_format($booking->total_price, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Aksi Cepat</h3>
                        <div class="space-y-3">
                            <a href="{{ route('admin.cars.create') }}"
                                class="block w-full text-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">
                                Tambah Mobil
                            </a>
                            <a href="{{ route('admin.bookings.index') }}"
                                class="block w-full text-center rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                                Kelola Booking
                            </a>
                            <a href="{{ route('admin.cars.index') }}"
                                class="block w-full text-center rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                                Kelola Mobil
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>