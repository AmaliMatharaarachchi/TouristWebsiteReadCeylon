<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use DB;
use App\City;
use App\Review;
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

        return view('welcome', ['reviews' => $reviews,'packages'=>$packages,'cities'=>$cities]);

    }
}
