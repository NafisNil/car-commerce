<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\Model as CarModel;
class Maker extends EloquentModel
{
    //
    protected $fillable = ['name'];
    public function models(){
        return $this->hasMany(CarModel::class, 'maker_id', 'id');
    }
    public function cars(){
        return $this->hasMany(Car::class);
    }
}
