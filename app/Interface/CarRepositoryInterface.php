<?php

namespace App\Repositories\Interfaces;

use App\Actions\CreateCarAction;
use App\Actions\UpdateCarAction;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;

interface CarRepositoryInterface
{
    public function all();
    public function find(int $id): ?Car;
    public function create(StoreCarRequest $request): Car;
    public function update(UpdateCarRequest $request, Car $car): bool;
    public function delete(Car $car): bool;
}