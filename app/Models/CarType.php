<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    //
    protected $fillable = ['name'];

    public function cars(){
        return $this->hasMany(Car::class, 'car_type_id', 'id');
    }
}
