<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index() {
        $response['publication'] = Publication::orderby("id", "desc")->paginate(9);
        return view("site.publication.index", $response);
    }
}
