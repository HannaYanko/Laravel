<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLaravel extends Controller
{
    public function  index()
    {
        return view('contact');
    }
}
