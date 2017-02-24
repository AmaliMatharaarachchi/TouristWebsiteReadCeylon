<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use DB;

class PackageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        $packages=DB::table('packages')->get();
        return view('packages', ['packages' => $packages]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'package_name'=>'required',
            'description'=>'required',
//            'price'=>'required',
            'days'=>'required',
            'route'=>'required',
            'picture1'=>'required',
            'picture2'=>'required',
//            'picture3'=>'required'

        ]);
        $package=new Package();
        $package->package_name=$request['package_name'];
        $package->description=$request['description'];
        $package->price=$request['price'];
        $package->days=$request['days'];
        $package->route=$request['route'];
        $package->picture1=$request['picture1'];
        $package->picture2=$request['picture2'];
        $package->picture3=$request['picture3'];
        $package->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('packages.show',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
