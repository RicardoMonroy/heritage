<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ([
        'address',
        'telephone',
        'telephone_office',
        'email_admin',
        'email_sales',
        'schedule',
        'url'
    ]);
}
