<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    
    public static function getStateString($state)
    {
    	switch ($state) {
    		case 0:
    			return 'initial';
    		case 0:
    			return 'open';
    		case 0:
    			return 'closed';
    		default:
    			return '';
    	}
        return $this->id;
    }
}
