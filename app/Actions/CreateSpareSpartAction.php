<?php
namespace App\Actions;

use App\Models\SpareSpart;

class CreateSpareSpartAction
{
    public function execute(array $data)
    {
        return SpareSpart::create($data);
    }
}