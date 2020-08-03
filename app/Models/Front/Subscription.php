<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public $timestamps = false;

    protected $fillable = [
      'id', 'gender', 'name', 'surname', 'email', 'country', 'postcode', 'city', 'address'
    ];
}

?>
