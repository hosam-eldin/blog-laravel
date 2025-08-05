<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>show</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">hosam Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/posts">All Posts</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      <div class="m-5">
        <div class="card mt-3 ">
        <div class="card-header">
          post info
        </div>
        <div class="card-body">
          <h5 class="card-title">Title: {{ $post['title']}}</h5>
          <p class="card-text">Description: {{ $post['text']}}</p>
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


  

  </body>
</html>