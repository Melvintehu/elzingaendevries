<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\User::all()->each(function($user){
    		$user->delete();
    	});

        $user =  new App\User;

        $user->name = 'admin';
        $user->email = 'admin@mentechmedia.nl';
        $user->password = bcrypt('password');
        $user->save();
    }
}
