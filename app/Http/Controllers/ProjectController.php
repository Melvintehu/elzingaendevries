<?php
namespace App\Http\Controllers;

// framework
use Illuminate\Http\Request;
use App\Http\Requests;

// models
use App\Project;
use App\Discipline;
use App\Tag;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = collect([
            'projects' => Project::all(),
        ]);
        if ( $data['projects']->isEmpty() ) {         
            return redirect('cms/project/create');
        }
        return view('cms.pages.projects.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplines = Discipline::pluck('name', 'id');
        return view('cms.pages.projects.create', compact('disciplines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create($request->all())->addTags($request->get('tagNames'));
        return redirect('cms/project');
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
        $data = [
            'project' => Project::find($id),
        ];
        $disciplines = Discipline::pluck('name', 'id');
        return view('cms.pages.projects.update', compact(['data', 'disciplines']));
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
        Project::find($id)->update($request->all());
        return redirect('cms/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id)->delete();
        return redirect('cms/project');
    }
}
