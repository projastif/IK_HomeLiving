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

    public function bitung1(){
        return view('detail_bitung1');
    }
}
