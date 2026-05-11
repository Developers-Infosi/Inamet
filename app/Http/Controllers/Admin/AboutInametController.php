<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\AboutInamet;
use Illuminate\Http\Request;

class AboutInametController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function show()
    {
        $response['aboutInamet'] = AboutInamet::first();
        $this->Logger->log("info", "Visualizou informações Sobre o Inamet");
        return view("admin.aboutInamet.details.index", $response);
    }

   
    public function edit($id)
    {

        $response['aboutInamet'] = AboutInamet::find($id);
        $this->Logger->log("info", "Entrou em editar informações sobre o Inamet com o id". $id);
        return view("admin.aboutInamet.edit.index", $response);
        
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
       $validation= $request->validate([

            'title' => ['required', 'string'],
            'body' => ['required', 'string']

        ]);

        $aboutInamet= AboutInamet::find($id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        $this->Logger->log('info', 'Editou Informações sobre o Inamet');
        return redirect()->route('admin.aboutInamet.show')->with('edit', '1');


    }

    
}
