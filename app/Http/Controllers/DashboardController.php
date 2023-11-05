<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(Request $request)
    {
        $title = "Dashboard";

        return view('dashboard.index', compact('title'));
    }
}
