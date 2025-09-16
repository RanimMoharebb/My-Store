<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPosts(){
        return view ('create');
    }

    public function store(Request $request){
        Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return redirect()->back();

    }
    
    public function index(){
        $posts=Post::all();
        return view ('index',compact('posts'));
    }
    public function destroy($id){
        $post=Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }

    public function edit($id){
        $post=Post::findOrFail($id);
        return view('edit', compact('post'));
    }
    public function update(Request $request, $id){
        $post=Post::findOrFail($id);
        $post->update([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return redirect()->route('index.posts')->with('success', 'Post updated successfully.');
    }
}
