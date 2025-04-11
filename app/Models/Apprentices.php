<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    public function Course()
{
    return $this->belongsTo('App\Models\Course');
}

public function Computer()
{
    return $this->belongsTo('App\Models\Computer');
}
}
