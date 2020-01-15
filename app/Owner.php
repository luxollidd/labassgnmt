<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Car;

class Owner extends Model
{
    protected $fillable = [
        'name','email',
    ];

    use SoftDeletes;

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
