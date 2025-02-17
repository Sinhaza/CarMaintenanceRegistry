<?php
namespace App\Actions;

use App\Models\MaintenanceJob;
use Illuminate\Support\Facades\Hash;

class CreateMaintenanceJobAction
{
    public function execute(array $data)
    {
        return MaintenanceJob::create($data);
    }
}