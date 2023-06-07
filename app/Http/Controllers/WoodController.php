<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WoodController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function indexclient()
    {
        return view('indexclient');
    }
}
