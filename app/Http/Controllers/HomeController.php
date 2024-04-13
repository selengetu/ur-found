<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $campus = DB::table('campus')->orderby('id')->get();
        $category = DB::table('category')->orderby('id')->get();
        $item = DB::table('v_lost_items')->orderby('id')->get();
        return view('item')->with(['item'=>$item,'category'=>$category,'campus'=>$campus]);
    }
    public function safety()
    {
        $campus = DB::table('campus')->orderby('id')->get();
        $category = DB::table('category')->orderby('id')->get();
        $item = DB::table('v_lost_items')->orderby('id')->get();
        return view('safety')->with(['item'=>$item,'category'=>$category,'campus'=>$campus]);
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
