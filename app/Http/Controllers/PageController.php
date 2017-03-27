<?php

namespace App\Http\Controllers;

use App\Package;
use App\User;
use Illuminate\Http\Request;
use Alert;
use DB;
use App\City;
use App\Review;

class PageController extends Controller
{

    public function getWelcomePage()
    {
        $reviews = Review::all();
        $packages= Package::all();
        $cities= City::all();

        return view('welcome', ['reviews' => $reviews,'packages'=>$packages,'cities'=>$cities]);

    }


}
