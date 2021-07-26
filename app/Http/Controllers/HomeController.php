<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        return view ('welcome');
    }

    public function p_manado(){
        return view('p_manado');
    }

    public function p_solo(){
        return view('p_solo');
    }

    public function p_jogja(){
        return view('p_jogja');
    }
}
