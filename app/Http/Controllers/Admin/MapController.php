<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin\Map;
use Auth;

class MapController extends AdminController
{
    public function index()
    {
	$maps=Map::all()->sortByDesc('id')->first();
	return view('admin.map')->with('maps', $maps);
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
