<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=['user_id','course_id','phone_no','profile','degree','gender'];
}
