<?php

namespace App\Http\Controllers;

use App\CustomizeTour;
use App\Tour;
use Illuminate\Http\Request;

class CustomizeTourController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($tour_id ,$cities)
    {
//        dd($cities);
        foreach($cities as $city){
            $customized_tour= new CustomizeTour();
            $customized_tour->city_id=$city;
            $customized_tour->tour_id=$tour_id;
            $customized_tour->save();

        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomizeTour  $customizeTour
     * @return \Illuminate\Http\Response
     */
    public function show(CustomizeTour $customizeTour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomizeTour  $customizeTour
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomizeTour $customizeTour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomizeTour  $customizeTour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomizeTour $customizeTour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomizeTour  $customizeTour
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomizeTour $customizeTour)
    {
        //
    }
}
