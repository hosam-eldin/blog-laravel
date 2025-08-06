<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()  {

        $allPosts = [
            ['id' => 1 , 'title' => 'php' ,'text' => 'hello world' , 'posted_by' => 'hosam' , 'created_at' => '22-10-10'],
            ['id' => 2 , 'title' => 'php' ,'text' => 'hello world' , 'posted_by' => 'hosam' , 'created_at' => '22-10-10'],
            ['id' => 3 , 'title' => 'php' ,'text' => 'hello world' , 'posted_by' => 'hosam' , 'created_at' => '22-10-10'],
            ['id' => 4 , 'title' => 'php' ,'text' => 'hello world' , 'posted_by' => 'hosam' , 'created_at' => '22-10-10'],
        ];
        return view('index',['posts' => $allPosts]);
        
    }

    public function show() {

        $singlePost = ['id' => 1 , 'title' => 'php' ,'text' => 'hello world' , 'posted_by' => 'hosam' , 'created_at' => '22-10-10'];
        return view('show', ['post' => $singlePost]);
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