<?php
namespace App\Actions;

use App\Models\ScheduledMaintenanceJob;

class CreateScheduledMaintenanceJobAction
{
    public function execute(array $data)
    {
        return ScheduledMaintenanceJob::create($data);
    }
}