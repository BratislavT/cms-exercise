<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public $timestamps = false;

    protected $fillable = [
       'id', 'name', 'surname', 'email', 'gender'
    ];
}

?>
