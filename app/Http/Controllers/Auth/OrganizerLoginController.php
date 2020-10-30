<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class OrganizerLoginController extends Controller
{
    public function __construct()
    {
       $this->middleware('guest:organizer');
    }

    public function showLoginForm()
    {
        return view('auth.organizer-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('organizer')->attempt(['email' => $request->email, 
        'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('organizer.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));



    }
}
