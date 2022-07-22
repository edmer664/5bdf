<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WingersController extends Controller
{
    function index()
    {
        return view('wingers.index');
    }

    function careers()
    {
        return view('wingers.careers.index');
    }
}
