<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName','userName' ,'email', 'password','photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function role(){
     return $this->belongsTo('App\Role');
    }

    public function setPasswordAttribute($password){
        if (!empty($password)){
            $this->attributes['password'] = bcrypt('password');
        }
    }

    /**
     * @param $photo_id
     */
    public function setProfilePicture($photo_id){
        if (empty($photo_id)){
            $this->attributes('photo_id')->user()->photo->file;
        }
    }

    public  function isAdmin(){
        if ($this->role->name == 'Admin'){
            return true;
        }
        return false;
    }



}
