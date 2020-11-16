<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['user_id','course_id','phone_no','roll_no','profile','address','gender'];
}
