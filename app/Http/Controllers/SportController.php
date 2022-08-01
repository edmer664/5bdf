<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class SportController extends Controller
{
    //
    function index(){
        return view('sports_lounge.index',[
            'carousels' => Carousel::where('branch', '=', 'sports')->get(),
        ]);
    }

    function promotions(){
        return view('sports_lounge.promotions');
    }

    function careers(){
        return view('sports_lounge.careers.index');
    }

    function franchise(){
        return view('sports_lounge.franchise');
    }

    function store(){
        return view('sports_lounge.store');
    }

}
