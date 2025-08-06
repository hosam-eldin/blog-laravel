@extends('layouts.app')
@section('title')
    create
@endsection

@section('content')
    
<form action="{{route('posts.store')}}" method="POST">
  @csrf
      <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input name="title" type="text" class="form-control" id="title" required >
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="content" class="form-control" id="description" rows="3" required></textarea>
  </div>
  <div class="mb-3">
    <label for="posted_by" class="form-label">Post creator</label>
    <select name="posted_by" class="form-control" required>
      <option value="1">hosam</option>
      <option value="2">mohammed</option>
    </select>
  </div>
  <button  class="btn btn-success" type="submit">Create</button>
   </form>

@endsection
