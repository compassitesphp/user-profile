<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EmpList;


class Technology extends Model
{
    function employee1()
    {
        return $this->belongsToMany('EmpList');
    }
}
