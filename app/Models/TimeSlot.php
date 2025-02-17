<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimeSlot extends Model
{
    use HasFactory;

    protected $table = 'time_slot';

    protected $fillable = ['time_start', 'time_end'];

    protected function casts(): array
    {
        return [
            'time_start' => 'date:m/d/Y',
            'time_end' => 'date:m/d/Y',
        ];
    }

    public function scheduledMaintenanceJobs()
    {
        return $this->belongsTo(ScheduledMaintenanceJob::class);
    }
}
