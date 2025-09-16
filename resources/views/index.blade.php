<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📃 All Posts</h2>
        <a href="{{route('create.posts')}}" class="btn btn-primary">+ Create New Post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>content</th>
                    <th>Created At</th>
                    <th style="width: 180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post )
                    
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{ $post->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <a href="{{ route('edit.posts', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('destroy.posts', $post->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
