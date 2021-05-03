<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetyou extends Model
{
    protected $fillable = ([
        'title',
        'goal_first',
        'goal_second',
        'goal_third',
    ]);
}
