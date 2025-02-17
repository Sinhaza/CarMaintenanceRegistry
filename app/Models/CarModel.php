<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function spareSparts()
    {
        return $this->belongsToMany(SpareSpart::class);
    }
}
