<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    public function Apprentices()
{
    return $this->hasMany('App\Models\Apprentice');
}
}
