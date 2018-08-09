<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitecController extends Controller
{
    
    public function index()
    {
        return view('home');
    }
    
    public function ps()
    {
        return view('ps');
    }

    public function duvidas()
    {
        return view('duvidas');
    }

    public function primeiroano()
    {
        return view('anos/1ano');
    }
    public function segundoano()
    {
        return view('anos/2ano');
    }
    public function terceiroano()
    {
        return view('anos/3ano');
    }
    public function matematica1ano()
    {
        return view('preconteudo/matematica1ano');
    }

    public function portugues1ano()
    {
        return view('preconteudo/portugues1ano');
    }

    public function matematica2ano()
    {
        return view('preconteudo/matematica2ano');
    }

    public function portugues2ano()
    {
        return view('preconteudo/portugues2ano');
    }

    public function portugues3ano()
    {
        return view('preconteudo/portugues3ano');
    }

    public function matematica3ano()
    {
        return view('preconteudo/matematica3ano');
    }
    
    public function matematica1anocapitulo1()
    {
        return view('matematicaumano/capitulo');
    }

    public function matematica1anocapitulo2()
    {
        return view('matematicaumano/capitulo2');
    }

    public function matematica1anocapitulo3()
    {
        return view('matematicaumano/capitulo3');
    }

    public function matematica1anocapitulo4()
    {
        return view('matematicaumano/capitulo4');
    }

    public function matematica1anocapitulo5()
    {
        return view('matematicaumano/capitulo5');
    }

    public function portugues1anocapitulo1()
    {
        return view('portuguesumano/capitulo');
    }

    public function portugues1anocapitulo2()
    {
        return view('portuguesumano/capitulo2');
    }

    public function portugues1anocapitulo3()
    {
        return view('portuguesumano/capitulo3');
    }

    public function portugues1anocapitulo4()
    {
        return view('portuguesumano/capitulo4');
    }

    public function portugues1anocapitulo5()
    {
        return view('portuguesumano/capitulo5');
    }
    
}
