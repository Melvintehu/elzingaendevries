<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use App\Section;
use File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $data = [
            'pages' => Page::all(),
        ];

        return view('cms.pages.pages.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                
      
        
        return view('cms.pages.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $files = File::allFiles(trim(base_path() . '/resources/views/pages/ '));

        foreach ($files as $file) {
           
            $pageName = str_replace('.blade.php', '', $file->getFilename());

            $filepath = trim(base_path() . '/resources/views/pages/ ');

            if ($file->getPath() == $filepath && count(Page::where('name', $pageName)->get()) == 0 ) {

                Page::create(['name' => $pageName ]);                
            }


            
        }
        
        return redirect('cms/page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    protected function getFileContents($page_id)
    {
        $pageFile = Page::where('id', $page_id)->first();
        $filePath = trim(base_path() . '\resources\views\pages\ '); 
        $filename = $filePath . $pageFile->name . '.blade.php';




        if ( !file_exists( $filename ) ) {
            return "";
        }

       

        return File::get($filename);
    }

    protected function getAvailablePositions($page_id)
    {
        $contents = $this->getFileContents($page_id);

        if ($contents == "") {

            return 0;

        }


        $numberOfSections = substr_count($contents, 'text-inject'); 

        $sections = Section::where([
                ['page_id', '=', $page_id]
            ])->get();


        $positionsAvailable = [];
        $positionsTaken = [];

        foreach($sections as $section)
        {
            array_push($positionsTaken, $section->page_position);
        }

        for($i = 0; $i <= $numberOfSections; $i++)
        {
            if(!in_array($i, $positionsTaken) || $i == 0){
                $positionsAvailable[$i] = $i;
            }
        }

        return $positionsAvailable;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $positionsAvailable = $this->getAvailablePositions($id);

        if ( $positionsAvailable == 0 ) {
            return redirect('cms/page/create');
        }

        $data = [
            'page' => Page::find($id),
            'pages' => Page::pluck('name', 'id'),
            'page_positions' => $positionsAvailable,
        ];

        return view('cms.pages.pages.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $page = Page::find($id);
        $page->update($request->all());

        return redirect('cms/page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $page = Page::find($id);
        $page->delete($id);

        return redirect()->back();
    }
}
