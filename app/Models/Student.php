<?php

namespace App\Models;
use App\Models\City;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    protected $with = ['city'];

    public function city(){
        return $this->hasOne(City::class, 'id', 'city_id');
    }
}
