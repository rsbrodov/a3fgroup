<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontTaskController extends Controller
{
    public function index()
    {
        return view('front-task.index');
    }
}
