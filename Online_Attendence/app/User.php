<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function student()
    {
        return $this->hasOne('App\Student');
    }
<<<<<<< HEAD
=======
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
>>>>>>> 30ad1d7f3bda2c36db2011a31c223e77028f31fa
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
    
}
