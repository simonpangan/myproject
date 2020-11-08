<?php

namespace App\Http\Controllers;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Session;    
use App\User;
use App\events_user;
use App\Feedback;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
    $usergetevents = User::find(Auth::user()->id)->events()->get();

    $allid = array();
    foreach ($usergetevents as $value) {
        $allid[] = $value->id;
    }

    $alljoinevents =  Posts::whereNotIn('id', $allid)->get();
   
     $data = Posts::whereIn('id', $allid)->get();
    
     return view('home', compact('data','alljoinevents'));        
    }

    public function join($id)
    {
        /*
        $data = [
            'wear' => 'wear',
            'things' => 'things'
     ];
     */
     $events_user = new events_user;
    
     $events_user->userid = Auth::user()->id;
     $events_user->eventid = $id;

     $events_user->save();
  
     
        $post = Posts::find($id);
        session()->put('wear',  $post);

     Mail::to(Auth::user()->email)->send(new WelcomeMail());
       // Posts::find($id)->delete();
     //   return redirect()->route('organizer.dashboard');
    
        return back();
    }

    public function feedbackadd($id)
    {
        $idevent = $id;

        return view('addfeedback',compact('idevent'));
        
      
    }
    
 
    public function feedbacksumbit(Request $request){
    
       
    
        $Feedback = new Feedback;
        $Feedback->id = $request->id;
        $Feedback->feedback = $request->feedback;
        
        $Feedback->save();
      
        return redirect()->route('home.index');
      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return view('posts.create');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request,[
            'eventname'=>'required|string|max:225', 
            'Date'=>'required', 
            ]);
        events::create($request->all());
        return redirect()->route('organizier')->with('success','Post Created');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
