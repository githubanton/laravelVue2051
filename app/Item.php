<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
        'text', 'date', 'time', 'select1', 'select2'
    ];
}
