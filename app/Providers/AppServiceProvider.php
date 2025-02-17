<?php

namespace App\Providers;

use App\Repositories\CarRepository;
use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Repositories\Interfaces\MaintenanceJobRepositoryInterface;
use App\Repositories\Interfaces\ScheduledMaintenanceJobRepositoryInterface;
use App\Repositories\MaintenanceJobRepository;
use App\Repositories\ScheduledMaintenanceJobRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(CarRepositoryInterface::class, CarRepository::class);
         $this->app->bind(MaintenanceJobRepositoryInterface::class, MaintenanceJobRepository::class);
         $this->app->bind(ScheduledMaintenanceJobRepositoryInterface::class, ScheduledMaintenanceJobRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
