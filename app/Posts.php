<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['eventname', 'date', 'time','bring','wear'];
    protected $dates = ['created_at', 'updated_at'];


    public function postfeedbacks()
    {
        return $this->hasMany('App\Feedback', 'id', 'id');
    }
    
    public function users()
    {
        
        return $this->belongsToMany(
            User::class,
            'events_user',
            'eventid',
            'userid');
    }

}
