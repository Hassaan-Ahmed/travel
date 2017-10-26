<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = 'images/';

    protected $fillable = [
        'file',
    ];

    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }
    public function tour(){
        return $this->belongsTo('App\Tour');
    }

    public function about(){
        return $this->belongsTo('App\About');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function contact(){
        return $this->belongsTo('App\Contact');
    }
}
