<?php

namespace App\Services;

use App\Models\TimeSlot;
use Ramsey\Uuid\Type\Integer;

class TimeslotService
{
    public function getWorkedTime(Timeslot $timeslot): Integer
    {
        $start = $timeslot->time_start;
        $end = $timeslot->time_end;

        return $start->diffInHours($end);
    }

    public function isWeekend(Timeslot $timeslot): bool
    {
        return $timeslot->time_start->isWeekend();
    }
}