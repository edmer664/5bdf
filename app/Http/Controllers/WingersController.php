<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\CareerPost;
use App\Models\Inclusion;
use App\Models\Promotion;
use App\Models\Product;

class WingersController extends Controller
{
    function index(Request $request)
    {
        if ($request->has('all')) {
            return view('wingers.index', [
                'carousels' => Carousel::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->get(),
                'products' => Product::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->get(),
            ]);
        }
        return view('wingers.index', [
            'carousels' => Carousel::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->get(),
            'products' => Product::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->take(6)->get(),
        ]);
    }

    function promotions(Request $request)
    {
        if ($request->has('all')) {
            return view('wingers.promotions', [
                'carousels' => Carousel::where('brand', '=', 'wingers')->get(),
                'promotions' => Promotion::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->get(),
                'all' => false,
            ]);
        } else {
            return view('wingers.promotions', [
                'carousels' => Carousel::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->get(),
                'promotions' => Promotion::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->take(3)->get(),
                'all' => true,
            ]);
        }
    }

    function careers()
    {
        return view('wingers.careers.index', [
            'careers' => CareerPost::where('brand', '=', 'wingers')->get(),
        ]);
    }

    function franchise()
    {
        return view(
            'wingers.franchise',
            [
                'carousels' => Carousel::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->get(),
                'inclusions' => Inclusion::where('brand', '=', 'wingers')->get(),
            ]
        );
    }

    function store()
    {
        return view('wingers.store');
    }
}
