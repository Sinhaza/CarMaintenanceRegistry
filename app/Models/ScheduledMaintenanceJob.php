<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScheduledMaintenanceJob extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function timeSlot()
    {
        return $this->hasOne(TimeSlot::class);
    }

    public function maintenanceJob()
    {
        return $this->belongsTo(MaintenanceJob::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_scheduled_job');
    }
}
