<?php

namespace App\Models;

use App\Enums\CarPartType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpareSpart extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'amount', 'type'];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'type' => CarPartType::class,
        ];
    }

    public function maintenanceJobs()
    {
        return $this->belongsToMany(MaintenanceJob::class);
    }

    public function carModels()
    {
        return $this->belongsToMany(CarModel::class);
    }
}
