<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::paginate(3);
        return view('posts.index', ['posts' => $posts]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

         $users = User::all();

        return view('posts.create', compact('users'));
    }

    public function user_show()
    {
        $user_id = auth()->user()->id;

        $posts = Post::get()->where('user_id', $user_id);

        return view('posts.user', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
            'alternative_title' => 'required',
            'cover_img' => 'required',
            'genres' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'date_published' => 'required',
            'content' => 'required',
        ]);

        $post = new Post;

        $post->user_id = $user_id;

        $post->title = $validatedData['title'];

        $post->alternative_title = $validatedData['alternative_title'];

        $post->cover_img = $validatedData['cover_img'];

        $post->genres = $validatedData['genres'];

        $post->author = $validatedData['author'];

        $post->publisher = $validatedData['publisher'];

        $post->date_published = $validatedData['date_published'];

        $post->content = $validatedData['content'];

        $post->save();

        session()->flash('message', 'Post was created.');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $posts]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
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
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
            'alternative_title' => 'required',
            'cover_img' => 'required',
            'genres' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'date_published' => 'required',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $post->title = $validatedData['title'];

        $post->alternative_title = $validatedData['alternative_title'];

        $post->cover_img = $validatedData['cover_img'];

        $post->genres = $validatedData['genres'];

        $post->author = $validatedData['author'];

        $post->publisher = $validatedData['publisher'];

        $post->date_published = $validatedData['date_published'];

        $post->content = $validatedData['content'];

        $post->save();

        session()->flash('message', 'Post edited!');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}