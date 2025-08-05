@extends('layouts.app')

@section('title')
    index
@endsection

@section('content')



      <div class="mt-4">
        <div class="text-center">
          <button type="button" class="btn btn-success  ">Crete Post</button>
        </div>
      </div>

      
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Title</th>
              <th scope="col">Posted By</th>
              <th scope="col">Created At</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{$post['id']}}</td>
              <td>{{$post['title']}}</td>
              <th>{{$post['posted_by']}}</th>
              <td>{{$post['created_at']}}</td>
              <td>
                <a href="{{route('posts.show', $post['id'])}}" class="btn btn-info">View</a>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
            
         
          </tbody>
      </table>
    
@endsection
