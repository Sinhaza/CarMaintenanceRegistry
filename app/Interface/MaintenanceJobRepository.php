<?php

namespace App\Repositories;

use App\Actions\CreateMaintenanceJobAction;
use App\Actions\UpdateMaintenanceJobAction;
use App\Http\Requests\StoreMaintenanceJobRequest;
use App\Http\Requests\UpdateMaintenanceJobRequest;
use App\Models\MaintenanceJob;
use App\Repositories\Interfaces\MaintenanceJobRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class MaintenanceJobRepository implements MaintenanceJobRepositoryInterface
{

    public function __construct(protected CreateMaintenanceJobAction $createMaintenanceJobAction, protected UpdateMaintenanceJobAction $updateMaintenanceJobAction)
    {
    }

    public function all()
    {
        return MaintenanceJob::all();
    }

    public function find(int $id): ?MaintenanceJob
    {
        return MaintenanceJob::find($id);
    }

    public function create(StoreMaintenanceJobRequest $request): MaintenanceJob
    {
        return $this->createMaintenanceJobAction->execute($request->validated());
    }

    public function update(UpdateMaintenanceJobRequest $request, MaintenanceJob $maintenanceJob): bool
    {
        return $this->updateMaintenanceJobAction->execute($maintenanceJob, $request->validated());
    }

    public function delete(MaintenanceJob $maintenanceJob): bool
    {
        return $maintenanceJob->delete();
    }
}