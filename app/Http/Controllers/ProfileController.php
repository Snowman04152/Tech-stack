<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {

        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);
    
     
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->save(); 
    
        return redirect()->route('profile')->with('success', 'Profile updated successfully!'); 
    }

    public function logout(Request $request)
{
    Auth::logout(); 
    $request->session()->invalidate(); 
    $request->session()->regenerateToken(); 

    return redirect()->route('login'); 
}
}
