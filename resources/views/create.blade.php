@extends('layouts.app')
@section('title')
    create
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
<form action="{{route('posts.store')}}" method="POST">
  @csrf
      <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input name="title" type="text" class="form-control" id="title" value={{old('title')}}  >
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="content" class="form-control" id="description" rows="3" >{{old('content')}}</textarea>
  </div>
  <div class="mb-3">
    <label for="posted_by" class="form-label">Post creator</label>
    <select name="posted_by" class="form-control" >
      @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      
      @endforeach
    </select>
  </div>
  <button  class="btn btn-success" type="submit">Create</button>
   </form>

@endsection
