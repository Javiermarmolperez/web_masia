<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function booking()
    {
        return view('booking');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function cuisine()
    {
        return view('cuisine');
    }
    
    public function dashboard()
    {
        return view('dashboard');
    }
}