<?php

namespace App\Http\Controllers;

use App\Models\MonthlyEvent;
use Illuminate\Http\Request;

class MonthlyEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.monthly_events.index', [
            'monthly_events' => MonthlyEvent::all()->sortByDesc('created_at')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/monthly_events', $imageName);


        $monthly_event = new MonthlyEvent();
        $monthly_event->name = $request->name;
        $monthly_event->image = $imageName;
        $monthly_event->brand = $request->brand;
        $monthly_event->save();
        return redirect()->back()->with('success', 'Monthly Event created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MonthlyEvent  $monthlyEvent
     * @return \Illuminate\Http\Response
     */
    public function show(MonthlyEvent $monthlyEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonthlyEvent  $monthlyEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(MonthlyEvent $monthlyEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MonthlyEvent  $monthlyEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MonthlyEvent $monthlyEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MonthlyEvent  $monthlyEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonthlyEvent $monthlyEvent)
    {
        // locate image then delete
        $image_path = public_path('public/monthly_events/' . $monthlyEvent->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $monthlyEvent->delete();
        return redirect()->back()->with('success', 'Monthly Event deleted successfully');

    }
}
