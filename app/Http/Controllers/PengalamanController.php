<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function index()
    {
        return view('pengalaman');
    }
}
