<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ControllerMain extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('homepage',compact('projects'));
    }

}
