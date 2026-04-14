<?php
declare(strict_types=1);

namespace App\Service;

use App\DTOs\CarDTO;
use App\Models\Car;

class CarService
{

  /**
   * Using DTO as a parameter to ensure the type of incoming data is guaranteed.
   */
  public function createCar(CarDTO $carDTO): Car
  {
    $data = [
      'name' => $carDTO->name,
      'plate_code' => $carDTO->plate_code,
      'color' => $carDTO->color,
      'transmission' => $carDTO->transmission,
      'price_12h' => $carDTO->price_12h,
      'price_24h' => $carDTO->price_24h
    ];

    if ($carDTO->image) {
      // Store to storage/app/public/cars
      $path = $carDTO->image->store('cars', 'public');
      $data['image'] = $path;
    }

    return Car::create($data);
  }

}