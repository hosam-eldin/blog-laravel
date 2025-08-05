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
}