<?php
namespace App\Actions;

use App\Models\Car;

class UpdateCarAction
{
    public function execute(Car $car, array $data): bool
    {
        return $car->update($data);
    }
}