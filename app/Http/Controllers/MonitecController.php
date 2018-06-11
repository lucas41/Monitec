<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitecController extends Controller
{
    
    public function index()
    {
        return view('irineu');
    }

    public function loginindex()
    {
        return view('auth.login');
    }
}
