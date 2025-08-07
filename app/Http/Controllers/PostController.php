<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()  {

        $postsFromDB = Post::all();
        
        return view('index',['posts' => $postsFromDB]);
        
    }

    public function show(Post $post) {

        // $singlePostFromDB = Post::findOrFail($postId);

        return view('show', ['post' => $post]);
    }

    public function create(){
        
        return view('create');
    }

    public function edit(){
        
        return view('edit');
    }

    public function store(){
        
       $data = request()->all();

       $title = request()->title;
       $content = request()->content;
       $posted_by = request()->posted_by;
       
        return redirect()->route('posts.index');

    }

    public function update(){

        $new_title = request()->title;
       $new_content = request()->content;
       $new_posted_by = request()->posted_by;
       
        return redirect()->route('posts.show',1);

    }

     public function destroy(){
        
        return redirect()->route('posts.index');
    }



}