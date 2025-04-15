<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Teachers;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas(){
        $area = Areas::find(1);
        return $area;
    }
}

