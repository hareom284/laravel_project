<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     protected $fillable=['name','photo','no_of_times','description'];

}
