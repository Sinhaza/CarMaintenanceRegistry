<?php

namespace App\Services;

use App\Models\ScheduledMaintenanceJob;
use Ramsey\Uuid\Type\Integer;

class ScheduledMaintenanceJobService
{

    protected $spareSpartService;
    protected $timeslotService;

    public function __construct(SpareSpartService $spareSpartService, TimeslotService $timeslotService)
    {
        $this->spareSpartService = $spareSpartService;
        $this->timeslotService = $timeslotService;
    }

    public function getFinalPrice (ScheduledMaintenanceJob $scheduledMaintenanceJob): float
    {
        $partsPrice = $this->getAllPartsPrice($scheduledMaintenanceJob);
        $maintenanceFee = $this->getMaintenancePrice($scheduledMaintenanceJob);

        return $this->applyVatPrice(($partsPrice + $maintenanceFee));
    }

    public function getMaintenancePrice(ScheduledMaintenanceJob $scheduledMaintenanceJob)
    {
        $timeslot = $scheduledMaintenanceJob->timeSlot()->first();
        $workedTime = $this->timeslotService->getWorkedTime($timeslot);
        $rate = $scheduledMaintenanceJob->maintenanceJob()->pluck('rate');
        
        if ($this->timeslotService->isWeekend($timeslot)) {
            // assuming we're going by a 2x rate when working on weekends
            $workedTime = $workedTime * 2;
        }

        return $rate * $workedTime;
    }

    public function getAllPartsPrice(ScheduledMaintenanceJob $scheduledMaintenanceJob): Integer
    {
        $totalPrice = 0;
        $job = $scheduledMaintenanceJob->maintenanceJob;
        foreach ($job->spareSparts as $part) {
           $totalPrice += $this->spareSpartService->getPartPrice($part);
        }
        return $totalPrice;
    }

    public function applyVatPrice(mixed $value): float
    {
        return floor($value * 1.20);
    }

}