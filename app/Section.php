<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Models

use App\Page;

class Section extends Model
{
    
    protected $fillable = [
    	'title', 
    	'body',
    	'template_id',
    	'page_id',
    	'page_position'

    ];

    /**
     * Description: create an array of sections where the order is based on their chosen pagePosition ( this is set in the cms )
     * @param type $sections 
     * @return type array of sections
     */
    public static function setPagePositions($sections)
    {
    	$sectionsNew = [];

		foreach ( $sections as $indexOfSection => $section )
		{	
			$sectionsNew[ $section->page_position ] = $sections[ $indexOfSection ];
		}

		return $sectionsNew;

    }

	public function template()
	{

		return $this->belongsTo('App\Template');

	}

	public function page()
	{
		return $this->belongsTo('App\Page');
	}


}
