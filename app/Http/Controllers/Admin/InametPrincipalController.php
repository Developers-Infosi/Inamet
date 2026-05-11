<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\InametPrincipal;

class InametPrincipalController extends Controller
{

    private $Logger;

    public function __construct() {
        $this->Logger = new Logger();
    }
  
 
    public function show()
    {
        $response['inametPrincipal']= InametPrincipal::first();
        $this->Logger->log("info", "Abriu Informações Sobre o Director do Inamet.");
        return view("admin.principal.details.index", $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['inametPrincipal']= InametPrincipal::find($id);
        return view("admin.principal.edit.index", $response);
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
            'name' => ['required', 'string'],
            'photo' => 'mimes:png,jpg,jpeg',
            'biograph' => ['required', 'string']
        ]);

        if($file= $request->file('photo')) {
            $file= $file->store("inametPrincipal");
        } else {
           $file=  InametPrincipal::find($id)->photo;
        }

        $inametPrincipal= InametPrincipal::find($id)->update([

            'name' => $request-> name,
            'photo' => $file,
            'biograph' => $request->biograph

        ]);

        return redirect()->route('admin.inametPrincipal.show')->with('edit', '1');
    }

   
}
