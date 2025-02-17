<?php

namespace App\Services;

use App\Http\Controllers\Api\SparePartController;
use App\Models\SpareSpart;

class SpareSpartService
{
    public function getPartPrice(SpareSpart $spareSpart)
    {
        // Get the price for a singular part through the API connection
        $part = $spareSpart->getPart($spareSpart->part_id);
        if (isset($part)) {
            return $part['price'];
        }
    }
}