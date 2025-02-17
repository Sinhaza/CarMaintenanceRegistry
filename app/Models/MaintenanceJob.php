<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaintenanceJob extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rate'];

    protected function casts(): array
    {
        return [
            'rate' => 'decimal:2',
        ];
    }

    public function spareSparts()
    {
        return $this->belongsToMany(SpareSpart::class);
    }

    public function scheduledMaintenanceJobs()
    {
        return $this->hasMany(ScheduledMaintenanceJob::class);
    }
}
