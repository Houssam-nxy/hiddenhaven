<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{

    public function pictures()
    {
        return view('secrets.pictures');
    }
    public function docs()
    {
        return view('secrets.docs');
    }
    
}
