<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'plate_code',
        'color',
        'seats',
        'transmission',
        'fuel_type',
        'price_12h',
        'price_24h',
        'image',
        'is_available'
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
