<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Car;

class Driver extends Model
{
    protected $fillable = [
        'name','icno','hpno','drivinglicenseno','expirydate',
    ];

    use SoftDeletes;

    public function cars(){
        return $this->belongsToMany(Car::class, 'car_driver');
    }
}
