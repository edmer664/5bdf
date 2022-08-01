<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Product;

class HotWingController extends Controller
{
    //
    function index()
    {
        return view('hot_wings.index',[
            'carousels' => Carousel::where('branch', '=', 'hot-wings')->get(),
            'products' => Product::where('branch', '=', 'hot-wings')->get()
        ]);
    }

    function promotions()
    {
        return view('hot_wings.promotions');
    }

    function careers()
    {
        return view('hot_wings.careers.index');
    }

    function franchise()
    {
        return view('hot_wings.franchise');
    }

    function store()
    {
        return view('hot_wings.store');
    }


}
