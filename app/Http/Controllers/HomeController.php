<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(Request $request){
        return '<h1><a href="/">Wissen Project </a></h1><h2>'.$request->path().'</h2>';
    }

}
