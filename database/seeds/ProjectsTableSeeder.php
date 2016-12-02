<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
    	
    	App\Project::all()->each(function($project){
    		$project->tags()->each(function($tag){
    			$tag->delete();
    		});
    		$project->delete();
    	});

    	App\Discipline::all()->each(function($discipline){
    		$discipline->projects()->saveMany(
    			factory(App\Project::class, 9)->create()->each(function ($project) {
					$project->tags()->saveMany(factory(App\Tag::class, 3)->make());
			    })
			);
    	});

    }
}
