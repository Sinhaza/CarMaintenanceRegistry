<?php

namespace App\Repositories;

use App\Actions\CreateCarAction;
use App\Actions\UpdateCarAction;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Repositories\Interfaces\CarRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class CarRepository implements CarRepositoryInterface
{

    protected $createCarAction, $updateCarAction;


    public function __construct(CreateCarAction $createCarAction, UpdateCarAction $updateCarAction)
    {
        $this->createCarAction = $createCarAction;
        $this->updateCarAction = $updateCarAction;
    }

    public function all()
    {
        return Car::all();
    }

    public function find(int $id): ?Car
    {
        return Car::find($id);
    }

    public function create(StoreCarRequest $request): Car
    {
        return $this->createCarAction->execute($request->validated());
    }

    public function update(UpdateCarRequest $request, Car $car): bool
    {
        return $this->updateCarAction->execute($car, $request->validated());
    }

    public function delete(Car $car): bool
    {
        return $car->delete();
    }
}