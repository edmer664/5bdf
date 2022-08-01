<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\CareerPost;
use App\Models\Promotion;

class WingersController extends Controller
{
    function index()
    {
        return view('wingers.index', [
            'carousels' => Carousel::where('branch', '=', 'wingers')->get(),
        ]);
    }

    function promotions(Request $request)
    {
        if ($request->has('all')) {
            return view('wingers.promotions', [
                'carousels' => Carousel::where('branch', '=', 'wingers')->get(),
                'promotions' => Promotion::where('branch', '=', 'wingers')->orderBy('created_at', 'desc')->get(),
                'all' => false,
            ]);
        } else {
            return view('wingers.promotions', [
                'carousels' => Carousel::where('branch', '=', 'wingers')->get(),
                'promotions' => Promotion::where('branch', '=', 'wingers')->orderBy('created_at', 'desc')->take(3)->get(),
                'all' => true,
            ]);
        }
    }

    function careers()
    {
        return view('wingers.careers.index', [
            'careers' => CareerPost::where('branch', '=', 'wingers')->get(),
        ]);
    }

    function franchise()
    {
        return view(
            'wingers.franchise',
            [
                'carousels' => Carousel::where('branch', '=', 'wingers')->get(),
            ]
        );
    }

    function store()
    {
        return view('wingers.store');
    }
}
