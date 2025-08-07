@extends('layouts.app')
@section('title')
    Edit
@endsection

@section('content')
    
<form action="{{route('posts.update', $post->id)}}" method="POST">
  @csrf
  @method('PUT')
   
      <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input name="title" type="text" class="form-control" id="title" required  value="{{$post->title}}">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="content" class="form-control" id="description" rows="3" required>{{$post->content}}</textarea>
  </div>
  <div class="mb-3">
    <label for="posted_by" class="form-label">Post creator</label>
    <select name="posted_by" class="form-control" required>
     @foreach($users as $user)
      <option @if($user->id == $post->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
      {{-- <option @selected($post->user_id == $user->id)  value="{{$user->id}}">{{$user->name}}</option> --}} 
     @endforeach 
    </select>
  </div>
  <button  class="btn btn-primary" type="submit">Update</button>
  
   </form>

@endsection