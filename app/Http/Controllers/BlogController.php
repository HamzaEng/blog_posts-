<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return view('/blog.home', [
            'posts' => blog::orderBy('updated_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/blog.create');
    }

    public function about()
    {
        return view('/blog.about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','max:255'],
            'description' => ['required', 'min:10']
        ]);
        
        $post = new blog();
        $post->title = $request->input('title');
        $post->Date = date('Y-m-d H:i:s');
        $post->description = $request->input('description');
        $post->save();
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = blog::findOrFail($id);
        return view('/blog.show',['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = blog::findOrFail($id);
        return view('/blog.edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required','max:255'],
            'description' => ['required', 'min:10']
        ]);
        
        $post = blog::findOrFail($id);
        $post->title = $request->input('title');
        $post->Date = date('Y-m-d H:i:s');
        $post->description = $request->input('description');
        $post->save();
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = blog::findOrFail($id);
        $post->delete();
        return redirect('/blog');
    }
}
