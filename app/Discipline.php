<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $fillable = [
    	'name'
    ];

    /**
     * TODO
     * @return type
     */
    public function projects()
    {
    	return $this->hasMany('App\Project');
    }
    
}
