@extends('dashboard.index')
@section('content')
    <div class="page-wrapper py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-semibold">Categories</h2>
                <a href="#" class="btn btn-success fw-semibold">
                    + Add New Category
                </a>
            </div>

            <div class="card shadow-sm border-0 rounded">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>created_at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>
                                            <a href="{{route('edit.category',$category->id)}}" class="btn btn-sm btn-warning me-1">
                                                Edit
                                            </a>
                                            <form action="{{route('destroy.category',$category->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this category?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
