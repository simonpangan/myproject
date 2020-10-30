<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $table = 'feedbacks';
    public $timestamps = false;
    protected $fillable = [
        'feedback'
    ];


    public function eventpost()
    {
        return $this->belongsTo('App\Posts', 'id', 'id');
    }


}
