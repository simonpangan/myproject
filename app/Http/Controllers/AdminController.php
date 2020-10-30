<?php

namespace App\Http\Controllers;
use App\Event;
use App\Posts;
use App\Feedback;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:organizer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $data = Posts::all();      
        return view('organizer', compact('data'));
    }

    public function feedback($id)
    {
        $feedbacks = Posts::find($id)->postfeedbacks;
        $post = Feedback::find($id)->eventpost;   
        return view('feedbacks', compact('feedbacks','post'));
    }

   
}
