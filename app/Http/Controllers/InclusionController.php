<?php

namespace App\Http\Controllers;

use App\Models\Inclusion;
use Illuminate\Http\Request;

class InclusionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inclusions.index', [
            'inclusions' => Inclusion::all()->sortByDesc('created_at')
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
        $inclusion = new Inclusion();
        $inclusion->title = $request->title;
        $inclusion->description = $request->description;
        $inclusion->brand = $request->brand;
        $inclusion->save();
        return redirect()->back()->with('success', 'Inclusion created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inclusion  $inclusion
     * @return \Illuminate\Http\Response
     */
    public function show(Inclusion $inclusion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inclusion  $inclusion
     * @return \Illuminate\Http\Response
     */
    public function edit(Inclusion $inclusion)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inclusion  $inclusion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inclusion $inclusion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inclusion  $inclusion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inclusion $inclusion)
    {
        //
    }
}
