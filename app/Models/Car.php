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

    public function features(){
        return $this->hasOne(CarFeature::class, 'car_id', 'id');
    }

    public function primaryImage(){
        return $this->hasOne(CarImage::class, 'car_id', 'id')->oldestOfMany('order');
    }
    
    public function images(){
        return $this->hasMany(CarImage::class, 'car_id', 'id');
    }

    public function carType(){
        return $this->belongsTo(CarType::class, 'car_type_id', 'id');
    }

    public function favouredUsers(){
        return $this->belongsToMany(User::class, 'favorite_cars', 'car_id', 'user_id')->withTimestamps();
    }

    public function fuelType(){
        return $this->belongsTo(FuelType::class, 'fuel_type_id', 'id');
    }

    public function maker(){
        return $this->belongsTo(Maker::class, 'maker_id', 'id');
    }

    public function model(){
        return $this->belongsTo(Model::class, 'model_id', 'id');
    }

    public function owner(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function city(){
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
