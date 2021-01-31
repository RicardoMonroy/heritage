<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ([
        'banner',
        'facebook',
        'twitter',
        'youtube',
        'linkedin',
        'instagram'
    ]);
}
