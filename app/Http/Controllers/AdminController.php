<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }

    function settings()
    {
        return view('admin.settings');
    }

    function update_detail(Request $request)
    {
        // username and email
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    function update_password(Request $request)
    {
        // password
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success', 'Password updated successfully');
    }
}
