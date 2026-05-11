<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\News;


class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     

        $response['about'] = About::first();
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(3)->get();
        
        
    
        return view('site.home.index', $response);
    }
}
