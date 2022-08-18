<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\CareerPost;
use App\Models\Inclusion;
use App\Models\Promotion;
use App\Models\Product;

class SportController extends Controller
{
    //
    function index(Request $request){
        if ($request->has('all')) {
            return view('sport.index', [
                'carousels' => Carousel::where('brand', '=', 'sport')->orderBy('created_at', 'desc')->get(),
                'products' => Product::where('brand', '=', 'sport')->orderBy('created_at', 'desc')->get(),
            ]);
        }
        return view('sports_lounge.index',[
            'carousels' => Carousel::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->get(),
            'products' => Product::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->take(6)->get(),
        ]);
    }

    function promotions(Request $request){
        if($request->has('all')){
            return view('sports_lounge.promotions',[
                'carousels' => Carousel::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->get(),
                'promotions' => Promotion::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->get(),
                'all' => false,
            ]);
        }else{
            return view('sports_lounge.promotions',[
                'carousels' => Carousel::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->get(),
                'promotions' => Promotion::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->take(3)->get(),
                'all' => true,
            ]);
        }
    }

    function careers(){
        return view('sports_lounge.careers.index',[
            'careers' => CareerPost::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->get(),
        
        ]);
    }

    function franchise(){
        return view('sports_lounge.franchise',[
            'carousels' => Carousel::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->get(),
            'inclusions' => Inclusion::where('brand', '=', 'sports')->get(),
        ]);
    }

    function store(){
        return view('sports_lounge.store');
    }

}
