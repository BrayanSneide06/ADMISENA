<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    public function Training_centers(){
        return $this->belongsTo('App\models\Training_centers');
    }

    public function Area(){
        return $this->belongsTo('App\models\Areas');
    }

    public function Course(){
        return $this->belongsTo('App\models\Courses');
    }
}
