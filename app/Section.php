<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Models

use App\Page;
use App\Classes\Template;
use App\Classes\FileHelper;

class Section extends Model
{   
    private $positions = [

    ];
    protected $fillable = [
    	'title', 
    	'body',
    	'page_id',
    	'page_position',
    ];

    public static function getAllTemplates()
    {   
        $dir = '/app/Templates/Section';
        $templates = FileHelper::getFilesFromDirectory($dir)
        ->getFiles()
        ->map(function($file){
            return new Template($file);
        }); 

        return collect($templates);
    }


    public function render($type, $position, $data){    
        if($type == 'title') {
            echo (isset($data['sections'][$position])) ? $data['sections'][$position]->title : "";
        } else if($type == 'body'){
            echo isset($data['sections'][$position]) ? $data['sections'][$position]->body : "";
        }
    }

    /**
     * Description: create an array of sections where the order is based on their chosen pagePosition ( this is set in the cms )
     * @param type $sections 
     * @return type array of sections
     */
    public static function setPagePositions($sections)
    {
        $sectionsNew = [];

        // return collect($sections)->each(function($section) {
            
        // });

        foreach ( $sections as $indexOfSection => $section )
        {   
            $sectionsNew[ $section->page_position ] = $sections[ $indexOfSection ];
        }

        return $sectionsNew;

    }


	public function page()
	{
		return $this->belongsTo('App\Page');
	}

}
