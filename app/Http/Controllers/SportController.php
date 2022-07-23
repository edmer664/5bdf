<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    //
    function index(){
        return view('sports_lounge.index');
    }

    function promotions(){
        return view('sports_lounge.promotions');
    }

    function careers(){
        return view('sports_lounge.careers');
    }

    function franchise(){
        return view('sports_lounge.franchise');
    }

    function store(){
        return view('sports_lounge.store');
    }
    
}
