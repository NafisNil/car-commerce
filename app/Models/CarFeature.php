<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
    //
    protected $primaryKey = 'car_id';
    protected $fillable = [
        'car_id',
        'feature_id',
    ];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
