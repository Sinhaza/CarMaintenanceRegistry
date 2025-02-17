<?php
namespace App\Actions;

use App\Models\ScheduledMaintenanceJob;

class UpdateScheduledMaintenanceJobAction
{
    public function execute(ScheduledMaintenanceJob $scheduledMaintenanceJob, array $data): bool
    {
        return $scheduledMaintenanceJob->update($data);
    }
}