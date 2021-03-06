<?php namespace App\Http\Controllers;

use Alert;
use App\City;
use DB;
use App\review;
use App\Package;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        $packages= Package::all();
        $cities= City::all();

//        return view('welcome', ['packages'=>$packages,'cities'=>$cities]);
        return view('index', ['reviews' => $reviews,'packages'=>$packages,'cities'=>$cities]);

    }
}
