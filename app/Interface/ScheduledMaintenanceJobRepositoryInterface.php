<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreScheduledMaintenanceJobRequest;
use App\Http\Requests\UpdateScheduledMaintenanceJobRequest;
use App\Models\ScheduledMaintenanceJob;

interface ScheduledMaintenanceJobRepositoryInterface
{
    public function all();
    public function find(int $id): ?ScheduledMaintenanceJob;
    public function create(StoreScheduledMaintenanceJobRequest $request): ScheduledMaintenanceJob;
    public function update(UpdateScheduledMaintenanceJobRequest $request, ScheduledMaintenanceJob $scheduledMaintenanceJob): bool;
    public function delete(ScheduledMaintenanceJob $scheduledMaintenanceJob): bool;
}