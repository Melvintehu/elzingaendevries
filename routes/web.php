<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



// testen van nieuwe functies

use App\Classes\FileManipulator\FileManipulator;

Route::get('/test', function(){
	$file = base_path() .'/app/Templates/Section/basic-section-with-photo.html';
	$fileManipulator = new FileManipulator($file);
	$fileManipulator->insertAt( 5 ,'<section class="pikkestijn"> Pikkenstijntje </section> ');
	// $fileManipulator->replace('pikkestijn', 'we hebben dit vervangen');
	// TODO : vervangt een hele line, moet alleen de search vervangen;!
	// dd($lines);
	// echo $fileManipulator->contentByLineNumber(3);
});


Route::get('/', function () {
    return view('pages.underconstruction.index');
});


//get routes
Route::get('/homepage', 'PagesController@homepage');

// projects
Route::get('/projecten', 'PagesController@projecten');
Route::get('/projecten/{filter}', 'PagesController@projecten');
Route::get('/project/{id}/{projectName}', 'PagesController@project');

Route::get('/over-ons', 'PagesController@overOns');
Route::get('/contact', 'PagesController@contact');
Route::get('/betimmering-interieur', 'PagesController@interieur');
Route::get('/betimmering-exterieur', 'PagesController@exterieur');
Route::get('/betimmering-schepen', 'PagesController@schepen');


Route::group(['prefix' => 'cms', 'middleware' => ['auth'] ], function () {


// cms routes
	
	// get routes
	Route::get('/', function(){
        return view('cms.cms');
    });

    
    // resource routes
	Route::resource('page', 'PageController');
	Route::resource('section', 'SectionController');
	Route::resource('project', 'ProjectController');
	Route::resource('discipline', 'DisciplineController');
	Route::resource('tag', 'TagController');

	// get routes
	Route::get('/page/change-order-of-sections/{id}', 'PagesController@changeOrderOfSections');
	

});
Auth::routes();

Route::get('/home', 'HomeController@index');
