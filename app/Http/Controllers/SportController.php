<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\CareerPost;
use App\Models\Promotion;
use App\Models\Product;

class SportController extends Controller
{
    //
    function index(Request $request){
        if ($request->has('all')) {
            return view('sport.index', [
                'carousels' => Carousel::where('branch', '=', 'sport')->orderBy('created_at', 'desc')->get(),
                'products' => Product::where('branch', '=', 'sport')->orderBy('created_at', 'desc')->get(),
            ]);
        }
        return view('sports_lounge.index',[
            'carousels' => Carousel::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->get(),
            'products' => Product::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->take(6)->get(),
        ]);
    }

    function promotions(Request $request){
        if($request->has('all')){
            return view('sports_lounge.promotions',[
                'carousels' => Carousel::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->get(),
                'promotions' => Promotion::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->get(),
                'all' => false,
            ]);
        }else{
            return view('sports_lounge.promotions',[
                'carousels' => Carousel::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->get(),
                'promotions' => Promotion::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->take(3)->get(),
                'all' => true,
            ]);
        }
    }

    function careers(){
        return view('sports_lounge.careers.index',[
            'careers' => CareerPost::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->get(),
        
        ]);
    }

    function franchise(){
        return view('sports_lounge.franchise',[
            'carousels' => Carousel::where('branch', '=', 'sports')->orderBy('created_at', 'desc')->get(),
        
        ]);
    }

    function store(){
        return view('sports_lounge.store');
    }

}
