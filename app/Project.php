<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'name', 
    	'description',
    	'client',
    	'date', 
    	'discipline_id',
        'residence'
    ];

    /**
     * TODO
     * @return type
     */
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    /**
     * TODO
     * @return type
     */
    public function discipline()
    {
    	return $this->belongsTo('App\Discipline');
    }

}
