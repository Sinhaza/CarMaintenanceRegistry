<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaintenanceJobRequest;
use App\Http\Requests\UpdateMaintenanceJobRequest;
use App\Models\MaintenanceJob;
use App\Repositories\Interfaces\MaintenanceJobRepositoryInterface;

class MaintenanceJobController extends Controller
{


    public function __construct(
        protected MaintenanceJobRepositoryInterface $maintenanceJobRepository,
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
    public function store(StoreMaintenanceJobRequest $request)
    {
        $this->maintenanceJobRepository->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(MaintenanceJob $maintenanceJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaintenanceJob $maintenanceJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaintenanceJobRequest $request, MaintenanceJob $maintenanceJob)
    {
        $this->maintenanceJobRepository->update($request,$maintenanceJob);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaintenanceJob $maintenanceJob)
    {
        $this->maintenanceJobRepository->delete($maintenanceJob);
    }
}
