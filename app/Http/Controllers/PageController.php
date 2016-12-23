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
        $directory = "/resources/views/pages";        
        Page::createFromDirectory($directory);

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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        $sectionSlots = $page->availableSlots();

        if ( $sectionSlots->isEmpty() ) {
            return redirect('cms/page/create');
        }

        $data = [
            'page' => Page::find($id),
            'pages' => Page::pluck('name', 'id'),
            'page_positions' => $sectionSlots->pluck('position', 'position'),
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
