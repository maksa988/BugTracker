<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bugs extends Model
{
    protected $table = 'bugs';

    public function addBugMessage($params){
    	$this->create($params);
    }
}
