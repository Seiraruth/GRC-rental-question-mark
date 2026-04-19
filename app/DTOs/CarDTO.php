<?php
declare(strict_types=1);

namespace App\DTOs;

use Illuminate\Http\UploadedFile;

class CarDTO
{
  public function __construct(
    public string $name,
    public string $plate_code,
    public string $color,
    public string $category,
    public string $transmission,
    public int $price_12h,
    public int $price_24h,
    public ?UploadedFile $image = null
  ) {
  }

  // Static method to convert request to DTO
  public static function fromRequest(array $validated, ?UploadedFile $image = null): self
  {
    return new self(
      name: $validated['name'],
      plate_code: $validated['plate_code'],
      color: $validated['color'],
      category: $validated['category'],
      transmission: $validated['transmission'],
      price_12h: (int) $validated['price_12h'],
      price_24h: (int) $validated['price_24h'],
      image: $image
    );
  }
}