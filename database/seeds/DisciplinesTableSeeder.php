<?php

use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Discipline::all()->each(function($discipline){
    		$discipline->delete();
    	});
        factory(App\Discipline::class, 3)->create();
    }
}
