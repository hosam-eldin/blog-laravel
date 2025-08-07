@extends('layouts.app')

@section('title')
    show
@endsection

@section('content')
    

      <div class="m-5">
        <div class="card mt-3 ">
        <div class="card-header">
          post info
        </div>
        <div class="card-body">
          <h5 class="card-title">Title: {{ $post['title']}}</h5>
          <p class="card-text">Description: {{ $post['content']}}</p>
        </div>
      </div>

      <div class="card mt-3 ">
        <div class="card-header">
          post creator info
        </div>
        <div class="card-body">
          <h5 class="card-title">NAME: {{ $post['posted_by']}}</h5>
          <p class="card-text">Created At: {{$post['created_at']}}</p>
        </div>
      </div>
      </div>


@endsection

  

