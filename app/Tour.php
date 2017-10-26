<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tour extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','location','contact','photo_id','service','description','continent_id',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    public function continent(){
        return $this->belongsTo('App\Continent');
    }

}
