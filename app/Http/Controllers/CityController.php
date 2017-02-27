<?php

namespace App\Http\Controllers;

use App\city;
use Illuminate\Http\Request;

class CityController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //city
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get city/create
        return view('add_city');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //post city/create

        $this->validate($request,[
            'city_name'=> 'required',
            'description'=>'required',
            'star1price'=>'required',
            'star2price'=>'required',
            'star3price'=>'required',
            'star4price'=>'required',
            'star5price'=>'required',
            'image1'=>'required',
            'image2'=>'required',
//            'image3'=>'required',


        ]);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get city/id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get city/id/edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // patch /city/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete city/id
    }
}
