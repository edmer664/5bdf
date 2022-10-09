<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
    function mainView()
    {
        return view('admin.carousel.main', [
            'carousels' => Carousel::where('brand', 'main')->get()
        ]);
    }

    function hotWingsView()
    {
        return view('admin.carousel.hot_wings', [
            'carousels' => Carousel::where('brand', 'hot-wings')->get()
        ]);
    }

    function sportsView()
    {
        return view('admin.carousel.sports', [
            'carousels' => Carousel::where('brand', 'sports')->get()
        ]);
    }

    function wingersView()
    {
        return view('admin.carousel.wingers', [
            'carousels' => Carousel::where('brand', 'wingers')->get()
        ]);
    }

    function store(Request $request)
    {
        Log::info('CarouselController::store');
        // image aspect ratio must be 16:9
        Log::info($request->file('imageFile')->getClientOriginalExtension());
        $test = Validator::make($request->all(),[
            'imageFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'brand' => 'required',
            'name' => 'required'
        ]);

        Log::info('CarouselController::store: test: ' . $test->errors());
        if($test->fails()){
            Log::info('CarouselController::store: validation failed');
            return back()->with('error', 'Image upload failed');
        }
        else{
            Log::info('CarouselController::store: validation passed');
            // store imageFile in storage/app/public/carousel
            $imageFile = $request->file('imageFile');
            // set name to TIME_STAMP.extension
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
            // store imageFile in storage/app/public/carousel
            $imageFile->move(public_path('storage/carousel'), $imageName);

            // store imageFileName in database
            $carousel = new Carousel;
            $carousel->path = $imageName;
            $carousel->brand = $request->brand;
            $carousel->name = $request->name;
            $carousel->save();

            return back()->with('success', 'Image has been uploaded successfully');
        }
    }

    function delete($id)
    {
        Log::info('CarouselController::delete');
        $carousel = Carousel::find($id);
        Log::info('CarouselController::delete: carousel: ' . $carousel);
        if($carousel){
            Log::info('CarouselController::delete: carousel found');
            // delete imageFile from storage/app/public/carousel
            Storage::delete('public/carousel/' . $carousel->path);
            // delete imageFileName from database
            $carousel->delete();
            return back()->with('success', 'Image has been deleted successfully');
        }
        else{
            Log::info('CarouselController::delete: carousel not found');
            return back()->with('error', 'Image not found');
        }

    }
}
