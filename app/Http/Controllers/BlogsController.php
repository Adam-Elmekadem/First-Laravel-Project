<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Allblogs = blogs::All();
        return view('blogs.index', compact('Allblogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:1000',
            'body' => 'required|max:5000|min:50',
            'description' => 'required|max:1000|min:10',
            'topic' => 'required|max:255',
            'color' => 'required|max:50',
        ]);

        $title = $request->input('title');
        $body = $request->input('body');
        $description = $request->input('description');
        $topic = $request->input('topic');
        $color = $request->input('color');

        if(!$validatedData) {
            return redirect()->back()
                ->withErrors(['creation' => 'Erreur de creation, verifiez vos donnees'])
                ->withInput([
                    'title' => $title,
                    'body' => $body,
                    'description' => $description,
                    'topic' => $topic,
                    'color' => $color
                ]);
        }

        blogs::create($validatedData);
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(blogs $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = blogs::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:1000',
            'body' => 'required|max:5000',
            'description' => 'required|max:1000',
            'topic' => 'required|max:255',
            'color' => 'required|max:50',
        ]);

        $toUpdate = blogs::findOrFail($id);
        $toUpdate->update($validatedData);
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = blogs::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
