<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class WingersController extends Controller
{
    function index()
    {
        return view('wingers.index',[
            'carousels' => Carousel::where('branch', '=', 'wingers')->get(),
        ]);
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
