<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }

public function contact()
{
    return view('pages.contact');
}
}

