<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=[
        'fname','lname','email','password',
    ];
}
