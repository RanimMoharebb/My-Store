<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

  <div class="card shadow-lg w-100" style="max-width: 700px;">
    <div class="card-body p-5">
      <h3 class="card-title text-center mb-4">✏️ Edit Post</h3>

      <form action="{{ route('update.posts', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label">Post name</label>
          <input type="text" class="form-control" id="name" name="title" value="{{ old('title', $post->title) }}" placeholder="Enter post name">
        </div>

        <div class="mb-4">
          <label for="content" class="form-label">Post description</label>
          <textarea class="form-control" id="content" name="content" rows="6" placeholder="Write your content here...">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success">Update Post</button>
          <a href="#" class="btn btn-secondary">Cancel</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
