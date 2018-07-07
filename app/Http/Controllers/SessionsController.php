<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $obj = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt($obj, $request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('success', 'Welcome back ' . Auth::user()->name);
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', 'Your account still not be activated, please check your email to activate it.');
                return redirect('/');
            }
        } else {
            session()->flash('danger', 'Sorry, email or password was not right');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'Logout successfully');
        return redirect('login');
    }
}
