<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>index</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">hosam's Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  href="#">All Posts</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      <div class="mt-5">
        <div class="text-center">
          <button type="button" class="btn btn-success  ">Crete Post</button>
        </div>
      </div>

      <div>
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
                <a href="/posts/{{$post['id']}}" class="btn btn-info">View</a>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
            
         
          </tbody>
      </table>
      </div>

  </body>
</html>