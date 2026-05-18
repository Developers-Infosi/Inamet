<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeasonalForecastController extends Controller
{
    public function index() {
        return view("site.seasonal.index");
    }
}
