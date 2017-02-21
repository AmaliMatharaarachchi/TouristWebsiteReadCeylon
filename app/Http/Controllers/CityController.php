<?php

namespace App\Http\Controllers;

use App\city;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function addCity(Request $request){
        $city=new city();
        $city->city_name=$request['city_name'];
        $city->description=$request['description'];
        $city->star1price=$request['star1price'];
        $city->star2price=$request['star2price'];
        $city->star3price=$request['star3price'];
        $city->star4price=$request['star4price'];
        $city->star5price=$request['star5price'];
        $city->image1=$request['image1'];
        $city->image2=$request['image2'];
        $city->image3=$request['image3'];
        $city->save();
        return redirect()->back();
    }
}
