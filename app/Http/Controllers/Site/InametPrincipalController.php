<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\InametPrincipal;
use Illuminate\Http\Request;

class InametPrincipalController extends Controller
{
    public function index() {
        $response['inametPrincipal']= InametPrincipal::first();
        return view("site.principal.index", $response);
    }
}
