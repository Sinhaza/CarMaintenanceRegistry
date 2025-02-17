<?php
namespace App\Actions;

use App\Models\CarModel;
use Illuminate\Support\Facades\Hash;

class CreateCarModelAction
{
    public function execute(array $data)
    {
        CarModel::create($data);
    }
}