<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

  <div class="card shadow-lg w-100" style="max-width: 700px;">
    <div class="card-body p-5">
      <h3 class="card-title text-center mb-4">📝 Create New Post</h3>
      <form action="{{route('store.posts')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Post Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title">
        </div>

        <div class="mb-4">
          <label for="content" class="form-label">Post Content</label>
          <textarea class="form-control" id="content" name="content" rows="6" placeholder="Write your content here..."></textarea>
        </div>

        <div class="text-end">        
          <button type="submit" class="btn btn-primary">Publish Post</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
