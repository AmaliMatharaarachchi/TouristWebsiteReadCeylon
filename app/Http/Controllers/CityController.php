<?php namespace App\Http\Controllers;

use App\City;
use App\Has_image;
use App\Image;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Redirect;

class CityController extends Controller{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //city
    public function index()
    {
//        $packages = $city->all()->sortByDesc('created_at');
        $images = Image::all();
        $cities = City::all()->sortByDesc('created_at');
//        $packages=DB::table('packages')->get();

        return view('cities', ['images' => $images, 'cities' => $cities]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

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
            'name' => 'required|max:255|unique:cities',
            'description' => 'required',
            'star3price' => 'required|integer',
            'star4price' => 'required|integer',
            'star5price' => 'required|integer',
            'images' => 'required',


        ]);
        $city = new City();
        $city->name = $request['name'];
        $city->description = $request['description'];
        $city->star3price = $request['star3price'];
        $city->star4price = $request['star4price'];
        $city->star5price = $request['star5price'];

        $city->save(); //create city

//        create images relations to the packages in has_image table
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
    public function show(City $city)
    {
        return view('cities.show', compact('city'));
    }

    public function showUpdate(City $city)
    {
//        return view('cities.update');
        $images = Image::all();
        return view('cities.update', compact('city','images'));
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
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:cities,name,'.$request->id,
            'description' => 'required',
            'star3price' => 'required|integer',
            'star4price' => 'required|integer',
            'star5price' => 'required|integer',
            'images' => 'required',


        ]);

        $city = City::find($request->id);
        $city->name = $request->name;
        $city->description = $request->description;

        $city->star3price = $request->star3price;

        $city->star4price = $request->star4price;
        $city->star5price = $request->star5price;


        $city->save();
        Has_image::where('city_id', $request->id)->delete();
        (new HasImageController())->store($request->images,$city->id);
        Alert::success('Successfully updated the city', 'SUCCESS')->persistent("OK");
        return redirect()->back();

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
