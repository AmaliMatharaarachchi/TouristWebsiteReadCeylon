<?php

namespace App\Http\Controllers;

use App\Has_city;
use Illuminate\Http\Request;

class HasCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store($cities, $package)
    {
        foreach($cities as $city){
            $has_city=new Has_city();
            $has_city->city_id=$city;
            $has_city->package_id=$package;
            $has_city->save();

        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Has_city  $has_city
     * @return \Illuminate\Http\Response
     */
    public function show(Has_city $has_city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Has_city  $has_city
     * @return \Illuminate\Http\Response
     */
    public function edit(Has_city $has_city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Has_city  $has_city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Has_city $has_city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Has_city  $has_city
     * @return \Illuminate\Http\Response
     */
    public function destroy(Has_city $has_city)
    {
        //
    }
}
