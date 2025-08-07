@extends('layouts.app')

@section('title')
    Index
@endsection

@section('content')



      <div class="mt-4">
        <div class="text-center">
          <a href="{{route('posts.create')}}"  class="btn btn-success">Crete Post</a>
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
              <th>{{$post->postCreator->name}}</th>
              <td>{{$post['created_at']}}</td>
              <td>
                <a href="{{route('posts.show', $post['id'])}}" class="btn btn-info">View</a>
                <a href="{{route('posts.edit', $post['id'])}}" class="btn btn-primary">Edit</a>
               <form style="display: inline" action="{{ route('posts.destroy', $post['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete post #{{ $post['id'] }}?')">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                
              </td>
            </tr>
            @endforeach
            
         
          </tbody>
      </table>
    
@endsection
