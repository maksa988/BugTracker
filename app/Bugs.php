<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bugs extends Model
{
    protected $table = 'bugs';
   	protected $fillable = ['user_id', 'bug_text', 'bug_name'];
   	public $timestamps = false;
   	protected $primaryKey = "bug_id";

   	public function getBugInfo($id){
    	return $this->find($id);
    }

    public function addBugMessage($params){
    	return $this->create($params);
    }
}
