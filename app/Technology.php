<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    
    public function emplist()
    {
        return $this->belongsTo('EmpList');
    }
}
