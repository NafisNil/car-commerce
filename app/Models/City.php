<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable = [
        'state_id',
        'name',
    ];

    public function state(){
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function cars(){
        return $this->hasMany(Car::class, 'city_id', 'id');
    }
}
