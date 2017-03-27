<?php

namespace App\Http\Controllers;

use App\city;
use Illuminate\Http\Request;
use Alert;

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //post city/create

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'star3price' => 'required',
            'star4price' => 'required',
            'star5price' => 'required',
//            'images' => 'required',

//            'image3'=>'required',


        ]);
        $city = new city();
        $city->name = $request['name'];
        $city->description = $request['description'];
        $city->star3price = $request['star3price'];
        $city->star4price = $request['star4price'];
        $city->star5price = $request['star5price'];
//        $city->image1 = $request['image1'];

        $city->save();

        (new HasImageController())->store($request->images,$city->id);

        Alert::success('Successfully saved the city', 'SUCCESS')->persistent("OK");


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get city/id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get city/id/edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // patch /city/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete city/id
    }
}
