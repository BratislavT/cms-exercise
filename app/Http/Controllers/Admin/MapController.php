<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Map;
use Auth;

class MapController extends Controller
{
    public function index()
    {
	$maps=Map::all()->sortByDesc('id')->first();
	return view('admin.pages.map.map')->with('maps', $maps);
    }

    
    public function store()
    {

        Map::create(request()->validate([
            'lat' => 'required',
            'lng'  => 'required'

        ]));

        //return redirect()->route('map.index');
        return redirect('/admin/map'); 
    }
    
    /**
    public function store(Request $request)
    {

        $this->validate($request, [
             'lat' => 'required',
             'lng'  => 'required',
        ]);

        Map::create([
            'id' => request('id'),
            'name' => request('name'), 
            'address' => request('address'),  
            'lat' => request('lat'),
            'lng' => request('lng')
        ]);
        
        return redirect()->route('map.index');
    }
    */
}

?>
