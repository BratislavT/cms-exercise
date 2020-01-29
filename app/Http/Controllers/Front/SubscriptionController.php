<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Session;

class SubscriptionController extends FrontController
{

    public function index(){

        // Read json.form from storage
        $frontEndJson = file_get_contents(storage_path('json/frontEndJson.json'));

        //return view('front.subscription');
        return view('front.subscription')->with('frontEndJson', $frontEndJson);
    }
}
