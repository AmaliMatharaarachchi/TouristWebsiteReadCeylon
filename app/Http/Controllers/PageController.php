<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getContactPage(){
        return view('contact_us');
    }
    public function getWelcomePage(){
        return view('welcome');

    } public function getPackagesPage(){
        return view('packages',['packages'=>((new PackageController())->getPackages())]);
//    or use ->compact('packages')
    }
    public function createPackage(){
        return view('add_package');
    }

}
