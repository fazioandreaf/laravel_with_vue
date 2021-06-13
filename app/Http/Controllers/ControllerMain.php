<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    public function index()
    {
        return view('homepage');
    }

}
