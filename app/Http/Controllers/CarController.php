<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\DTOs\CarDTO;
use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use App\Service\CarService;

class CarController extends Controller
{
    public function __construct(
        protected CarService $carService
    ) {
    }

    public function index()
    {
        return $this->carService->getAllCars();
    }

    public function show(Car $car)
    {
        return $car;
    }

    public function store(StoreCarRequest $request)
    {
        // Change to dto
        $dto = CarDTO::fromRequest(
            $request->validated(),
            $request->file('image')
        );

        // Call Car Service
        $this->carService->createCar($dto);

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil ditambah!');
    }

    public function edit(Car $car)
    {
        return 'Ini halaman edit' . $car;
    }

    public function update(StoreCarRequest $request, Car $car)
    {
        $dto = CarDTO::fromRequest($request->validated(), $request->file('image'));

        $this->carService->updateCar($car, $dto);

        return redirect()->route('cars.index')->with('success', 'Data mobil diperbarui');
    }

    public function destroy(Car $car)
    {
        $this->carService->deleteCar($car);
        return redirect()->route('cars.index')->with('success', 'Mobil berhasi dihapus');
    }
}
