<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamController extends Controller
{
    function index(Request $request)
    {
        $title = "Form Input Jam";

        return view('jam.index', compact('title'));
    }
}
