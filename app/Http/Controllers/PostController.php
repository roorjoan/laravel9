<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        //$posts = DB::table('posts')->get();//usando DB
        $posts = Post::get(); //usando Eloquent todos los posts

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        //return Post::findOrFail($post);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $post = new Post();
        return view('posts.create', compact('post'));
    }

    public function store(SavePostRequest $request)
    {
        //validando el form
        //$request->validate([
        //    'title' => ['required', 'min:4'],
        //    'body' => ['required']
        //]);

        //guardando el post enviado del form
        //$post = new Post();
        //$post->title = $request->input('title');
        //$post->body = $request->input('body');
        //$post->save();

        //Post::create([
        //    'title' => $request->input('title'),
        //    'body' => $request->input('body')
        //]);

        Post::create($request->validated());

        //manda un mensaje flash
        //session()->flash('status', 'Post created!');

        //redirecciona a la ruta indicada
        //return redirect()->route('posts.index');
        return to_route('posts.index')->with('status', 'Post created!');
    }

    public function edit(Post $post)
    {
        //return view('posts.edit', ['post' => $post]);
        return view('posts.edit', compact('post')); //compact manda un array de variables a la vista
    }

    public function update(SavePostRequest $request, Post $post)
    {
        //$request->validate([
        //    'title' => ['required', 'min:4'],
        //    'body' => ['required']
        //]);

        //actualizando el post enviado del form
        //$post->title = $request->input('title');
        //$post->body = $request->input('body');
        //$post->save();

        //$post->update([
        //    'title' => $request->input('title'),
        //    'body' => $request->input('body')
        //]);

        $post->update($request->validated());

        //session()->flash('status', 'Post updated!');

        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post deleted!');
    }
}
