<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PackageController extends Controller
{
    public function getPackages(){
        $packages=DB::table('package')->get();
        return $packages;
    }
}
