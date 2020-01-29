<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 'name', 'address', 'lat', 'lng'
    ];
}

?>
