<?php

namespace App\Http\Controllers;

use App\Models\CareerPost;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Inclusion;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Support\Facades\Log;

class HotWingController extends Controller
{
    //
    function index(Request $request)
    {
        if($request->has('all')){
            return view('hot_wings.index2',[
                'carousels' => Carousel::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->get(),
                'products' => Product::where('brand', '=', 'hot-wings')->orderBy('created_at','desc')->get()
            ]);
        }else{
            return view('hot_wings.index2',[
                'carousels' => Carousel::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->get(),
                'products' => Product::where('brand', '=', 'hot-wings')->orderBy('created_at','desc')->take(6)->get()
            ]);
        }
    }

    function promotions(Request $request)
    {
        if($request->has('all')){

            return view('hot_wings.promotions',[
                'carousels' => Carousel::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->get(),
                'promotions' => Promotion::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->get(),
                'all' => true
            ]);
        }else{
            return view('hot_wings.promotions',[
                'carousels' => Carousel::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->get(),
                'promotions' => Promotion::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->take(3)->get(),
                'all' => false
            ]);
        }
    }

    function careers()
    {
        return view('hot_wings.careers.index',[
            'careers' => CareerPost::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->get()
        ]);
    }

    function franchise()
    {
        Log::info(Inclusion::where('brand', '=', 'hot-wings')->get());
        return view('hot_wings.franchise',[
            'carousels' => Carousel::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->get(),
            'inclusions' => Inclusion::where('brand', '=', 'hot-wings')->get()
        ]);
    }

    function store()
    {
        return view('hot_wings.store');
    }


}
