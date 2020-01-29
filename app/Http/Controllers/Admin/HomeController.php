<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use Session;

class HomeController extends AdminController
{

    public function dashboard(){
	return view('admin.dashboard');
    }

}
