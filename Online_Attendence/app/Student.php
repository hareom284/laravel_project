<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    protected $fillable=['user_id','course_id','phone_no','roll_no','profile','address','gender'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
    public function attendance()
    {
    	return $this->hasOne('App\Attendance');
    }


}
