<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'maker_id',
        'model_id',
        'car_type_id',
        'fuel_type_id',
        'city_id',
        'user_id',
        'year',
        'price',
        'vin',
        'mileage',
        'address',
        'phone',
        'description',
        'published_at',
    ];
}
