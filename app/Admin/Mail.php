<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;


class Mail extends Model
{
    public $timestamps = false;
  
    protected $fillable = [ 
        'id', 'recipient', 'subject', 'message', 'status' 
    ]; 
}

?>
