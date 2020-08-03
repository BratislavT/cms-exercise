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

    public function store(Request $request)
    {

        $this->validate($request, [
             'lat' => 'required',
             'lng'  => 'required',
        ]);

        $map = new Map;
        $map->id = $request->id;
	    $map->name = $request->name; 
        $map->address = $request->address;
        $map->lat = $request->lat;
        $map->lng = $request->lng;
        $lat = $request->lat;
        $map->save();
        
        return redirect()->route('map.index');
    }
}

?>
