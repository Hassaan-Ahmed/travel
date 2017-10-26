<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = [
        'name','photo_id',
    ];
    public function tour(){
        return $this->belongsTo('App\Tour');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
