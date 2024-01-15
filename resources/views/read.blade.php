@extends('mainmenu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Manage Blogs</h1>
                    </div>
                    <div class="card-body">

                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Blog Title</th>
                                <th>Author Name</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>

                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->author_name }}</td>
                                <td>{{ $blog->category->name }}</td>
                                <td><img src="{{ asset($blog->image) }}" width="100%" alt="image not found"></td>
                                <td>{{ $blog->description }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Are You Sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
