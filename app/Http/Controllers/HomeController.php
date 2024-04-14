<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        $userId = Auth::id(); 
        $location = DB::table('location')->orderby('id')->get();
        return view('item')->with(['item'=>$item,'category'=>$category,'campus'=>$campus,'location'=>$location]);
    }
    public function safety()
    {
        $campus = DB::table('campus')->orderby('id')->get();
        $category = DB::table('category')->orderby('id')->get();
        $item = DB::table('v_found_items')->orderby('id')->get();
        $location = DB::table('location')->orderby('id')->get();
        return view('safety')->with(['item'=>$item,'category'=>$category,'campus'=>$campus,'location'=>$location]);
    }
    public function claim()
    {
        return view('claim');
    }
    public function report()
    {
        $campus = DB::table('campus')->orderby('id')->get();
        $category = DB::table('category')->orderby('id')->get();
        $userId = Auth::id(); 
        $item = DB::table('v_lost_items')
                   ->where('owner_id', $userId) 
                   ->orderBy('id')
                   ->get();
        $location = DB::table('location')->orderby('id')->get();
        return view('report')->with(['item'=>$item,'category'=>$category,'campus'=>$campus,'location'=>$location]);
    }
    public function storeReport(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'campus_id' => 'required|integer',
            'lost_date' => 'required|date',
        ]);
        $image = $request->file('picture');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images/item'), $filename);
        DB::table('lost_items')->insert([
            'category_id' => $request->category_id,
            'description' => $request->description,
            'location_id' => $request->campus_id,
            'lost_date' => $request->lost_date,
            'item_title' => $request->item_title,
            'status_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'owner_id' => Auth::id(),
            'img_path' => $filename,
        ]);

        return redirect()->route('report')->with('success', 'Report has been filed.');
    }
    public function storeFound(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'campus_id' => 'required|integer',
            'lost_date' => 'required|date',
        ]);
        $image = $request->file('picture');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images/item'), $filename);
        DB::table('found_items')->insert([
            'category_id' => $request->category_id,
            'description' => $request->description,
            'pickup_location' => $request->campus_id,
            'lost_date' => now(),
            'item_title' => $request->item_title,
            'status_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'founder_id' => Auth::id(),
            'img_path' => $filename,
        ]);

        return redirect()->route('safety')->with('success', 'Report has been filed.');
    }
}
