<?php

namespace App\Models;
use App\Models\Student;


use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public $timestamps = false;
    protected $guarded = [];

    protected $with = ['student'];


    public function student(){
        return $this->hasOne(Student::class);
    }
}
