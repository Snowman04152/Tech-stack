<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    

    public function index()
    {
        $blog = Post::all();
        
        return view('blogs.index', compact('blog'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    

        // $blog = [
        //     'id' => count($this->blogs) + 1, 
        //     'title' => $request->input('title'),
        //     'summary' => $request->input('summary'),
        //     'content' => $request->input('content'),
        // ];
    
       
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function show($id)
    {
        $blog = Post::find($id);
        
        return view('blogs.show', compact('blog'));
    }
}
