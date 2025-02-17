<?php
namespace App\Actions;

use App\Models\MaintenanceJob;

class UpdateMaintenanceJobAction
{
    public function execute(MaintenanceJob $maintenanceJob, array $data): bool
    {
        return $maintenanceJob->update($data);
    }
}