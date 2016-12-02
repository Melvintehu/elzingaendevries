<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// http
use App\Http\Requests;

// framework 
use File;

// models
use App\Page;
use App\Section;
use App\Project;
use App\Discipline;


class PagesController extends Controller
{

	

   	public function homepage()
   	{
   		$data = [
   			'sections' => $this->getSections('homepage'),
   		];

   		return view('pages.homepage', compact('data'));
   	}

   	public function projecten($filter = "")
   	{
   		
   	
   		$data = [
   			'sections' => $this->getSections('projecten'),
   			'projects' => $this->getProjects($filter),
   			'disciplines' => Discipline::all(),
            'filter' => $filter,

   		];


   		return view('pages.projecten', compact('data'));
   	}


   	public function project($id, $projectName)
   	{	

   		$data = [
   			'project' => Project::find($id),
   			'disciplines' => Discipline::all(),
   		];

   		return view('pages.project.show', compact('data'));
   	}

   	public function contact()
   	{
   		$data = [
   			'sections' => $this->getSections('contact'),
   		];

   		return view('pages.contact', compact('data'));
   	}

	public function overOns()
	{

		$sections = $this->getSections('over-ons');

		$data = [
			'sections' => $sections,
		];

		return view('pages.over-ons', compact('data'));
	}	

	public function interieur()
	{	
		$data = [
			'sections' => $this->getSections('betimmering-interieur'),
         'projects' => $this->getProjects('interieur')->take(3),
		];

		return view('pages.betimmering-interieur', compact('data'));
	}

	public function exterieur()
	{

		$data = [
			'sections' => $this->getSections('betimmering-exterieur'),
         'projects' => $this->getProjects('interieur')->take(3),
		];

		return view('pages.betimmering-exterieur', compact('data'));
	}

	public function schepen()
	{


		$data = [
			'sections' => $this->getSections('betimmering-schepen'),
         'projects' => $this->getProjects('interieur')->take(3),
		];

		return view('pages.betimmering-schepen', compact('data'));

	}


	// protected methods


	protected function getProjects($discipline)
	{	

		$discipline = Discipline::where('name', $discipline)->first();

		if ($discipline == "") {
   			return Project::all();
   		}
   		
   		return Project::where('discipline_id', $discipline->id)->get();
   		
	}
   			
	/**
	 * function for getting the sections for a given pagename
	 * @param type $pageName 
	 * @return type array of pageSections
	 */
   	protected function getSections($pageName)
   	{
   		$page = Page::where('name', $pageName)->first();

		$sections = $page->sections;

   		return Section::setPagePositions($sections);
   	} 

}
