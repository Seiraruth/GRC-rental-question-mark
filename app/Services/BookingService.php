<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Car;
use Carbon\Carbon;

class BookingService
{
  public function calculateBooking($carId, $startDate, $durationHours)
  {
    $car = Car::find($carId);
    $start = Carbon::parse($startDate);
    $end = $start->copy()->addHours((int) $durationHours);

    // Hitung harga dasar + jam tambahan
    $baseHours = $durationHours >= 24 ? 24 : 12;
    $extraHours = $durationHours - $baseHours;

    if ($baseHours === 12) {
      $totalPrice = $car->price_12h;
      $pricePerExtraHour = $car->price_12h / 12;
    } else {
      $totalPrice = $car->price_24h;
      $pricePerExtraHour = $car->price_24h / 24;
    }

    // Tambahkan biaya jam tambahan
    if ($extraHours > 0) {
      $totalPrice += $extraHours * $pricePerExtraHour;
    }

    return [
      'end_date' => $end,
      'total_price' => $totalPrice,
    ];
  }
}