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
        post::create([
        "name"=> $r->input("name"),
        "email"=> $r->input("email"),
        "text"=> $r->input("text")
        ]);
        return "apstiprinats";
        }
    public function index(){
        $posts = Post::all();
        
        return view("posts.index",[
            "posts" =>$posts
        ]);
    }
    public function show($id){
        $post = Post::find($id);
        return $post;
    }
}
