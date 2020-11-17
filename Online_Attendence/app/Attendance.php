<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
     protected $fillable=['count','course_id','student_id'];
}

