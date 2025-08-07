<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
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
        
        $users = User::all();
        
        return view('create',['users' => $users]);
    }

    public function edit($postId){
        
         $users = User::all();
         $singlePostFromDB = Post::findOrFail($postId);
    
        return view('edit', ['users' => $users, 'post'=> $singlePostFromDB]);
    }

    public function store(){
        
       $data = request()->all();

       $title = request()->title;
       $content = request()->content;
       $posted_by = request()->posted_by;

    //    $post = new post;
    //    $post->title = $title;
    //    $post->content = $content;
    // //    $post->posted_by = $posted_by;
    //    $post->save();
    
    Post::create([
        'title' => $title,
        'content' => $content
    ]);

       
        return redirect()->route('posts.index');

    }

    public function update($postId){

        $new_title = request()->title;
       $new_content = request()->content;
       $new_posted_by = request()->posted_by;

       $singlePostFromDB = Post::find($postId);
       $singlePostFromDB->update([
        'title'=>$new_title,
        'content'=>$new_content
       ]);

        return redirect()->route('posts.show', $postId);

    }

     public function destroy(Post $post){
        $post->delete();
        // Post::where('id', $post)->delete();
        return redirect()->route('posts.index');
    }



}