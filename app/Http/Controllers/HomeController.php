<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('5bdf.index');
    }

    public function careers()
    {
        return view('5bdf.careers.index');
    }

    public function events()
    {
        return view('5bdf.events');
    }

    public function csr()
    {
        return view('5bdf.csr');
    }

    public function ourGroup()
    {
        return view('5bdf.our_group');
    }
}
