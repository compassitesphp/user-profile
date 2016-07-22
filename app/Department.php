<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EmpList;

class Department extends Model
{
    function employee()
    {
        return $this->hasMany('EmpList');
    }
   
}
