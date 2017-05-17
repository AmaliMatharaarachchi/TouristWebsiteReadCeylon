<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cities' => 'required',
            'name'=>'required'
        ]);

//       if(count($request->cities)>1){
        $cities = explode(",", $request->cities);
            $tour= new Tour();
           $tour->user_id=Auth::user()->id;
           $tour->name=$request->name;
        $tour->save();

        (new CustomizeTourController())->store($tour->id,$cities);
//       }
//        else{
//            Alert::error('please select cities using "add to my tour" buttons', 'No cities added!')->persistent("OK");
//            return redirect()->back();
//        }

        Alert::success('Successfully created tour');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Tour $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
