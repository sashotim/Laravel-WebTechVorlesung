<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    public function getId()
    { 
        return $this->id;
    }
}
