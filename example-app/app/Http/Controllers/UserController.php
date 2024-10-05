<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();
       
        if (!$user) {
            return redirect('/login'); 
        }

        return view('user', compact('user')); 
    }
}