<?php

namespace App\Http\Controllers;

use App\Image;
use App\City;
use App\Package;
use Illuminate\Http\Request;
use DB;
use Alert;


class PackageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);

    }


    public function index(Package $package)
    {
        //

        $packages = $package->all()->sortByDesc('created_at');
        $images=Image::all();
        $cities=City::all();
//        $packages=DB::table('packages')->get();
        return view('packages', ['packages' => $packages,'images'=>$images,'cities'=>$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_package');
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
            'name' => 'required',
            'description' => 'required'


//            'picture3'=>'required'

        ]);
        $package = new Package();
        $package->name = $request['name'];
        $package->description = $request['description'];
        $package->price = $request['price'];
        $package->days = $request['days'];
        $package->save();

        (new HasCityController())->store($request->cities,$package->id);
        Alert::success('Successfully saved the tour package', 'SUCCESS')->persistent("OK");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
