<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Classes\Logger;

class ProjectController extends Controller
{

    private $Logger;

    public function __construct() {
        $this->Logger = new Logger();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        $response['projects'] = Project::orderby("id",'desc')->get();
        $this->Logger->log('info', 'Listou todos os Projectos');
        return view("admin.project.list.index", $response);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.project.create.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|string|min:5',
            'status' => 'required|string',
            'description' => 'required|string|min:10',
            'category' => 'required|string|min:5',
            'image' => 'required|mimes:png,jpeg,jpg'
        ]);

        $file = $request->file("image")->store("Project");

        $project= Project::create([
            'title' => $request->title,
            'status' => $request->status,
            'category' => $request->category,
            'description' => $request->description,
            'image'=> $file
        ]);

        $this->Logger->log('info', 'Cadastrou um projecto com o título '. $project->title);
        return redirect("admin/projecto/show/".$project->id)->with("create",'1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['project'] = Project::findOrFail($id);
        return view("admin.project.details.index", $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['project'] = Project::findOrFail($id);
        return view("admin.project.edit.index", $response);
        
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
        $request->validate([
            'title' => 'required|string|min:4',
            'status' => 'required|string',
            'category' => 'required|string|min:5',
            'description' => 'required|string|min:10'
        ]);

        if($file= $request->file("image")) {
            $file= $file->store("image");
        } else {
          $file= Project::find($id)->image;
        } 
        
        
        $project= Project::find($id)->update([
            'title' => $request->title,
            'status' => $request->status,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $file
        ]);

        $this->Logger->log('info', 'Actualizou o projecto com o ticket '.$id);
        return redirect()->route("admin.project.show",$id)->with('edit','1');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->Logger->log("info", 'Eliminou um registo com o ticket '.$id);
        Project::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
        
    }


}
