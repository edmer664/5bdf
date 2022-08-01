<?php

namespace App\Http\Controllers;

use App\Models\CareerPost;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Product;
use App\Models\Promotion;

class HotWingController extends Controller
{
    //
    function index(Request $request)
    {
        if($request->has('all')){
            return view('hot_wings.index',[
                'carousels' => Carousel::where('branch', '=', 'hot-wings')->get(),
                'products' => Product::where('branch', '=', 'hot-wings')->get()
            ]);
        }else{
            return view('hot_wings.index',[
                'carousels' => Carousel::where('branch', '=', 'hot-wings')->get(),
                'products' => Product::where('branch', '=', 'hot-wings')->take(6)->get()
            ]);
        }
    }

    function promotions(Request $request)
    {
        if($request->has('all')){

            return view('hot_wings.promotions',[
                'carousels' => Carousel::where('branch', '=', 'hot-wings')->get(),
                'promotions' => Promotion::where('branch', '=', 'hot-wings')->orderBy('created_at', 'desc')->get(),
                'all' => true
            ]);
        }else{
            return view('hot_wings.promotions',[
                'carousels' => Carousel::where('branch', '=', 'hot-wings')->get(),
                'promotions' => Promotion::where('branch', '=', 'hot-wings')->orderBy('created_at', 'desc')->take(3)->get(),
                'all' => false
            ]);
        }
    }

    function careers()
    {
        return view('hot_wings.careers.index',[
            'careers' => CareerPost::where('branch', '=', 'hot-wings')->orderBy('created_at', 'desc')->get()
        ]);
    }

    function franchise()
    {
        return view('hot_wings.franchise',[
            'carousels' => Carousel::where('branch', '=', 'hot-wings')->get()
        ]);
    }

    function store()
    {
        return view('hot_wings.store');
    }


}
