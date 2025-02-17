<?php
namespace App\Actions;

use App\Models\TimeSlot;

class CreateTimeSlotAction
{
    public function execute(array $data)
    {
        return TimeSlot::create($data);
    }
}