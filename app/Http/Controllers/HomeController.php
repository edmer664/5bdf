<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Models\CareerPost;
use App\Models\Csr;
use App\Models\MonthlyEvent;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        return view('5bdf.index', [
            'carousels' => Carousel::where('brand', '=', 'main')->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function careers()
    {

        return view('5bdf.careers.index', [
            'careers' => CareerPost::where('brand', '=', 'main')->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function career_view(CareerPost $career)
    {

        return view('5bdf.careers.view',[
            'career' => $career,
        ]);
    }

    public function events()
    {
        return view('5bdf.events',[
            'carousels' => Carousel::where('brand', '=', 'main')->orderBy('created_at', 'desc')->get(),
            'monthly_events' => MonthlyEvent::orderBy('created_at', 'desc')->get(),
            'events' => Event::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function event_view(Event $event)
    {
        return view('5bdf.event_view',[
            'event' => $event,
        ]);
    }
   

    public function csr()
    {
        // first six csr
        $wingers = Csr::where('brand', '=', 'wingers')->orderBy('created_at', 'desc')->take(6)->get();
        $hot_wings = Csr::where('brand', '=', 'hot-wings')->orderBy('created_at', 'desc')->take(6)->get();
        $sports = Csr::where('brand', '=', 'sports')->orderBy('created_at', 'desc')->take(6)->get();
        return view('5bdf.csr', [
            'wingers' => $wingers,
            'hot_wings' => $hot_wings,
            'sports' => $sports,
        ]);
    }

    public function ourGroup()
    {
        return view('5bdf.our_group');
    }
}
