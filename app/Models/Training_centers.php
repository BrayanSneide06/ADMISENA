<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_centers extends Model
{
    public function Courses()
{
    return $this->hasMany('App\Models\Course');
}


public function Teachers()
{
    return $this->hasMany('App\Models\Teacher');
}
}
