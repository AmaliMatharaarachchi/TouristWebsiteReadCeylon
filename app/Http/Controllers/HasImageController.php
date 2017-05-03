<?php namespace App\Http\Controllers;

use App\Has_image;
use Illuminate\Http\Request;

class HasImageController extends Controller{
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
     * create relations images belongs to city in has_image table
     */
    public function store($images, $city)
    {
        foreach($images as $image){
            $has_image=new Has_image();
            $has_image->city_id=$city;
            $has_image->image_id=$image;
            $has_image->save();

        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Has_image  $has_image
     * @return \Illuminate\Http\Response
     */
    public function show(Has_image $has_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Has_image  $has_image
     * @return \Illuminate\Http\Response
     */
    public function edit(Has_image $has_image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Has_image  $has_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Has_image $has_image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Has_image  $has_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Has_image $has_image)
    {
        //
    }
}
