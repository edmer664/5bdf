<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use Illuminate\Http\Request;

class CsrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.csr.index',[
            'csrs'=>Csr::orderBy('created_at', 'desc')->get(),
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
        $imageFile = $request->file('image');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();
        $imageFile->move(public_path('storage/csr'), $imageName);

        Csr::create([
            'path' => $imageName,
            'brand' => $request->brand,
        ]);
        return redirect()->back()->with('success','Image uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function show(Csr $csr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function edit(Csr $csr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Csr $csr)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Csr $csr)
    {
        //delete image
        $image_path = public_path('storage/csr/'.$csr->path);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        
        
        $csr->delete();
        return redirect()->back()->with('success','File deleted');
    }
}
