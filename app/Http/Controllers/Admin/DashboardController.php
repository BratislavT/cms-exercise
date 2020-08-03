<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard.dashboard');
    }
}
