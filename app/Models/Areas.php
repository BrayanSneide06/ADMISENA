<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    public function Teachers()
{
    return $this->hasMany('App\Models\Teacher');
}

public function Courses()
{
    return $this->hasMany('App\Models\Course');
}

}
