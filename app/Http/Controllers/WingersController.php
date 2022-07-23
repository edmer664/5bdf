<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WingersController extends Controller
{
    function index()
    {
        return view('wingers.index');
    }

    function promotions()
    {
        return view('wingers.promotions');
    }
    
    function careers()
    {
        return view('wingers.careers.index');
    }

    function franchise()
    {
        return view('wingers.franchise');
    }

    function store()
    {
        return view('wingers.store');
    }
}
