<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function scheduledMaintenanceJobs()
    {
        return $this->belongsToMany(ScheduledMaintenanceJob::class, 'car_scheduled_job');
    }
}
