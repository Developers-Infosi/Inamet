<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;


class PublicationController extends Controller
{

    private $Logger;


    public function __construct() {
        $this->Logger= new Logger();    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $response ['publications'] = Publication::get();
        return view("admin.publication.list.index", $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.publication.create.index");
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
            'title' =>'required|string|min:5',
            'author' => 'required|string|min:5',
            'cover' => 'nullable|mimes:png,jpg,jpeg',
            'category' => 'required|string|min:4',
            'document'=> 'nullable|mimes:png,jpg,jpeg,pptx,docx,pdf',
            'published_at'=> 'nullable|date',
            'body' => 'string|min:5'

        ]);

        $file=null;
        $document=null;

        if($request->hasFile("cover")){
            $file= $request->file("cover")->store("Publication");
        }

        if($request->hasFile("document")){
            $document= $request->file("document")->store("Publication");
        }
    

        $publication = Publication::create([
            'title' => $request->title,
            'author' => $request-> author,
            'cover' => $file,
            'category' => $request->category,
            'document' => $document,
            'published_at' => $request->published_at,
            'body' => $request->body
        ]);

        $this->Logger->log("info", "Cadastrado uma Publicação");
        return redirect("admin/publicacoes/show/".$publication->id)->with("create", "1");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response["publication"] = Publication::findOrFail($id);
        return view("admin.publication.details.index", $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response["publication"] = Publication::findOrFail($id);
        return view("admin.publication.edit.index", $response);
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

            'title' => ['required','string', 'min:5'],
            'author' => ['required', 'string', 'min:5'],
            'cover' => ['required', 'mimes:png,jpg,jpeg'],
            'category' => ['required', 'string', 'min:4'],
            'document'=> ['nullable', 'mimes:png,jpg,jpeg,pptx,docx,pdf'],
            'published_at'=> ['nullable','date'],
            'body' => ['string', 'min:5']

        ]);


        if($file= $request->file("cover")) {
            $file= $file->store("Publication");
        } else{
            $file= Publication::find($id)->cover;
        }

        if($document= $request->file("document")) {
            $document= $document->store("Publication");
        } else{
            $document= Publication::find($id)->document;
        }


        $publication = Publication::update([

            'title' => $request->title,
            'author' => $request-> author,
            'cover' => $file,
            'category' => $request->category,
            'document' => $document,
            'pubished_at' => $request->published_at,
            'body' => $request->body

        ]);

        $this->Logger->log("info", "Actualizou uma publicação com o id". $id);
        return redirect()->route("admin.publication.show", $id)->with("edit", "1");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Logger->log("info", "Eliminou uma publicação com o identificador ".$id);
        Publication::find($id)->delete();
        return redirect()->back()->with("destroy", "1");
    }
}
