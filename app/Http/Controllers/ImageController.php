<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Alert;


class ImageController extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = new Image();
        $this->validate($request, [
            'description' => 'required',
            'image' => 'required',
            'name' => 'required'
        ]);
        $image->name = $request->name;
        $image->description = $request->description;

        $file = Input::file('image');
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $name = $timestamp . '-' . $file->getClientOriginalName();

        $image->url = $name;

        $file->move(public_path() . '/img/', $name);

        $image->save();

        Alert::success('Successfully saved the image', 'SUCCESS')->persistent("OK");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
