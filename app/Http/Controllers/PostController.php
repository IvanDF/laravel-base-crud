<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get data from db
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        // Validation
        $request->validate([
            'title' => 'required|unique:posts|max:30',
            'description' => 'required',
            'short_description' => 'required|max:255',
            'author' => 'required|max:100',
        ]);

        $post = new Post();
        // $post->title = $data['title'];
        // $post->description = $data['description'];
        // $post->short_description = $data['short_description'];
        // $post->author = $data['author'];
        $post->fill($data);

        $saved = $post->save();
        
        if($saved) {
            return redirect()->route('posts.show', $post->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::find($id);

        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Dati inviati dalla form
        $data = $request->all();

        // Istanza specifica
        $post = Post::find($id);

        // Validation
        $request->validate([
            'title' => [
                'required',
                Rule::unique('posts')->ignore($id),
                'max:30',
            ],
            'description' => 'required',
            'short_description' => 'required|max:255',
            'author' => 'required|max:100',
        ]);

        // Aggiorno i dati DB
        $updated = $post->update($data);

        if ($updated) {
            return redirect()->route('posts.show', $post->id);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $ref = $post->title;
        $deleted = $post->delete();

        if($deleted) {
            return redirect()->route('posts.index')->with('deleted', $ref);
        }
    }
}
