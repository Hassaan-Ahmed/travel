<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['name','title','description','photo_id','contact'];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
