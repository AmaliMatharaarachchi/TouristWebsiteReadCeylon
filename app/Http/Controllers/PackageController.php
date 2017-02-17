<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use DB;

class PackageController extends Controller
{
    public function getPackages(){
        $packages=DB::table('packages')->get();
        return $packages;
    }

    public function addPackage(Request $request){
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

    public function show(Package $package){//find(wildcard)

//        $package=Package::find($id);

        return view('packages.show',compact('package'));
    }
//  public function show($id){
//        $package=Package::find($id);
//        return view('packages.show',compact('package'));
//    }
}
