<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduledMaintenanceJobRequest;
use App\Http\Requests\UpdateScheduledMaintenanceJobRequest;
use App\Models\ScheduledMaintenanceJob;
use App\Repositories\Interfaces\ScheduledMaintenanceJobRepositoryInterface;
use App\Services\ScheduledMaintenanceJobService;

class ScheduledMaintenanceJobController extends Controller
{

    public function __construct(
        protected ScheduledMaintenanceJobRepositoryInterface $scheduledMaintenanceJobRepository,
        protected ScheduledMaintenanceJobService $scheduledMaintenanceJobService,
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduledMaintenanceJobRequest $request)
    {
        $this->scheduledMaintenanceJobRepository->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ScheduledMaintenanceJob $scheduledMaintenanceJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScheduledMaintenanceJob $scheduledMaintenanceJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduledMaintenanceJobRequest $request, ScheduledMaintenanceJob $scheduledMaintenanceJob)
    {
        $this->scheduledMaintenanceJobRepository->update($request->validated(), $scheduledMaintenanceJob);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScheduledMaintenanceJob $scheduledMaintenanceJob)
    {
        $this->scheduledMaintenanceJobRepository->delete($scheduledMaintenanceJob);
    }

    public function getScheduledMaintenancePrice(ScheduledMaintenanceJob $scheduledMaintenanceJob)
    {
        $this->scheduledMaintenanceJobService->getFinalPrice($scheduledMaintenanceJob);
    }

}
