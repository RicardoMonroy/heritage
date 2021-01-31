<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ([
        'picture',
        'h5',
        'h2',
        'p1',
        'p2',
        'p3'
    ]);
}
