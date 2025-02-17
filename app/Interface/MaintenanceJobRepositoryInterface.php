<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreMaintenanceJobRequest;
use App\Http\Requests\UpdateMaintenanceJobRequest;
use App\Models\MaintenanceJob;

interface MaintenanceJobRepositoryInterface
{
    public function all();
    public function find(int $id): ?MaintenanceJob;
    public function create(StoreMaintenanceJobRequest $request): MaintenanceJob;
    public function update(UpdateMaintenanceJobRequest $request, MaintenanceJob $maintenanceJob): bool;
    public function delete(MaintenanceJob $maintenanceJob): bool;
}