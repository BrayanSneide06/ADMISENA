<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function Area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function Training_centers(){
        return $this->belongsTo('App\Models\Training_centers');
    }

    public function Teachers(){
        return $this->belongsToMany('App\Models\Teachers');
    }

    public function Apprentices(){
        return $this->hasMany('App\Models\Apprentices');
    }

}
