<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events_user extends Model
{

    protected $table = 'events_user';
    public $timestamps = false;
    protected $fillable = [
        'userid', 'eventid',
    ];

    
}
