<?php

namespace App\Repositories;

use App\Actions\CreateScheduledMaintenanceJobAction;
use App\Actions\UpdateScheduledMaintenanceJobAction;
use App\Http\Requests\StoreScheduledMaintenanceJobRequest;
use App\Http\Requests\UpdateScheduledMaintenanceJobRequest;
use App\Models\ScheduledMaintenanceJob;
use App\Repositories\Interfaces\ScheduledMaintenanceJobRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class ScheduledMaintenanceJobRepository implements ScheduledMaintenanceJobRepositoryInterface
{

    public function __construct(protected CreateScheduledMaintenanceJobAction $createScheduledMaintenanceJobAction, protected UpdateScheduledMaintenanceJobAction $updateScheduledMaintenanceJobAction)
    {
    }

    public function all()
    {
        return ScheduledMaintenanceJob::all();
    }

    public function find(int $id): ?ScheduledMaintenanceJob
    {
        return ScheduledMaintenanceJob::find($id);
    }

    public function create(StoreScheduledMaintenanceJobRequest $request): ScheduledMaintenanceJob
    {
        return $this->createScheduledMaintenanceJobAction->execute($request->validated());
    }

    public function update(UpdateScheduledMaintenanceJobRequest $request, ScheduledMaintenanceJob $ScheduledmaintenanceJob): bool
    {
        return $this->updateScheduledMaintenanceJobAction->execute($ScheduledmaintenanceJob, $request->validated());
    }

    public function delete(ScheduledMaintenanceJob $ScheduledmaintenanceJob): bool
    {
        return $ScheduledmaintenanceJob->delete();
    }
}