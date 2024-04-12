<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function example()
    {
        return view('example');
    }

    public function item()
    {
        return view('item');
    }
    public function claim()
    {
        return view('claim');
    }
    public function report()
    {
        return view('report');
    }
}
