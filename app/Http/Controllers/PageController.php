<?php

namespace App\Http\Controllers;

use App\Package;
use App\User;
use Illuminate\Http\Request;
use Alert;
use DB;
use App\City;
use App\Review;

/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{

//    this returns welcome page with reviews packages and cities retrieved from database
    public function getWelcomePage()
    {
        $reviews = Review::all();
        $packages= Package::all();
        $cities= City::all();

        return view('welcome', ['reviews' => $reviews,'packages'=>$packages,'cities'=>$cities]);

    }


}
