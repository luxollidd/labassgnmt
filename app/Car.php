<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Owner;
use App\Driver;

class Car extends Model
{
    protected $fillable = [
        'RegNum','Manufacturer','Model','YearMade','owner_id',
    ];

    use SoftDeletes;

    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    public function drivers(){
        return $this->belongsToMany(Driver::class, 'car_driver');
    }


}
