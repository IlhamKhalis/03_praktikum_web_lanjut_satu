<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $prof = Profile::all();
        return view('profile')->with('profile', $prof);
    }
}
