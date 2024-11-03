<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function homepage()
    {
        $post = Post::all();
    
        return view('homepage' , compact('post'));
    }

    public function profile()
    {
        return view('profile');
    }
}
