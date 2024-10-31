<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs = [];

    public function index()
    {
        $blogs = [
            ['id' => 1, 'title' => 'Blog Post One', 'summary' => 'A brief summary of the first blog post. Learn more about this topic!'],
            ['id' => 2, 'title' => 'Blog Post Two', 'summary' => 'A brief summary of the second blog post. Explore the insights shared!'],
            ['id' => 3, 'title' => 'Blog Post Three', 'summary' => 'A brief summary of the third blog post. Dive into the details!'],
        ];
        
        return view('blogs.index', compact('blogs'));
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
    

        $blog = [
            'id' => count($this->blogs) + 1, 
            'title' => $request->input('title'),
            'summary' => $request->input('summary'),
            'content' => $request->input('content'),
        ];
    
       
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function show($id)
    {
        $blog = [
            'id' => $id,
            'title' => 'Blog Post ' . $id,
            'content' => 'This is the content of blog post ' . $id . '. Here you can add the details and insights about the blog topic.'
        ];

        return view('blogs.show', compact('blog'));
    }
}
