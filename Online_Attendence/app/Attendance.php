<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Attendance extends Model
{
     protected $fillable=['count','course_id','student_id'];
     public function User()
     {
         return $this->belongsTo('App\User');
     }
}

