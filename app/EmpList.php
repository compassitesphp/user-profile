<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Technology;

class EmpList extends Model
{
    function department()
    {
        return $this->belongsTo('Department');
    }
    
    function technology()
    {
        return $this->belongsToMany('Technology');
    }
}
