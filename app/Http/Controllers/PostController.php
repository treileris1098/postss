<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $r){
        Post::create([
            "name"=> $r->input("name"),
            "email"=> $r->input("email"),
            "text"=> $r->input("text")
        ]);

        return "apstiprinats";
    }

    public function index(){
        $posts = Post::all();

        return view("posts.index", [
            "posts" => $posts
        ]);
    }

    public function show($id){
        $post = Post::find($id);
        return view("posts.show", ["post" => $post]);
    }

    public function edit($id){
        $posts = Post::find($id);
        return view("posts.edit",[ "post" => $posts ]);
    }
    public function update(Request $request , $id){
      $posts = Post::find($id);

      $posts->update([
        "name"=>$request->input("name"),
        "email"=>$request->input("email"),
        "text"=>$request->input("text")
      ]);
        return "update good";
    }
    public function destroy($id){
        $posts = Post::find($id);

        $posts->delete();

        return "Post with id".$post->id."deleted";
    }
}
