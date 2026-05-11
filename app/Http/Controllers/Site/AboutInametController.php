<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AboutInamet;
use Illuminate\Http\Request;

class AboutInametController extends Controller
{
    public function index() {
        $response['aboutInamet'] = AboutInamet::first();
        return view("site.aboutInamet.index", $response);
    }
}
