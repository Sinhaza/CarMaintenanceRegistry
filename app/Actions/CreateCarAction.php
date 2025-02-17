<?php
namespace App\Actions;

use App\Models\Car;
use Illuminate\Support\Facades\Hash;

class CreateCarAction
{
    public function execute(array $data)
    {
        return Car::create($data);
    }
}