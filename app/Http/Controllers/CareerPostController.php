<?php

namespace App\Http\Controllers;

use App\Models\CareerPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CareerPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.careers.index',[
            'careers' => CareerPost::all()
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
        $career = new CareerPost();
        $career->title = $request->title;
        $career->description = $request->description;
        $career->requirements = $request->requirements;
        $career->brand = $request->brand;
        $career->location = $request->location;
        $career->save();

        return response()->json([
            'message' => 'Career Post Created Successfully',
            'career' => $career,
            'status' => 200
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareerPost  $careerPost
     * @return \Illuminate\Http\Response
     */
    public function show(CareerPost $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareerPost  $careerPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CareerPost $career)
    {
        //
        return view('admin.careers.edit',[
            'career' => $career
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CareerPost  $careerPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareerPost $career)
    {
        //
        $career->update($request->all());
        return redirect()->route('5bdf.admin.careers.index')->with('success', 'Career Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareerPost  $careerPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerPost $career)
    {
        //
        Log::info('Deleting career post: '.$career->title);
        $career->delete();
        return redirect()->back()->with('success','Career Post Deleted Successfully');
    }
}
