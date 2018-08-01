<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitecController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    public function primeiroano()
    {
        return view('1ano');
    }
    public function segundoano()
    {
        return view('2ano');
    }
    public function terceiroano()
    {
        return view('3ano');
    }
}
