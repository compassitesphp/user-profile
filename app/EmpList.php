<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpList extends Model
{
   public function tehcnologies()
   {
       return $this->hasMany('Technology');
   }
}
