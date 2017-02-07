<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getContactPage(){
        return view('contact_us');
    }
}
