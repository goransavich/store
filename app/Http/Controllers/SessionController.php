<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
    	return view('login');
    }

    public function store()
    {


        if (! auth()->attempt(request(['username', 'password']))){

    		return back()->withErrors([
    			'message' => 'Please check your credentials and try again'

    			]);
    	}

    	// redirect to home

    	return redirect('/');
    
    }
}
