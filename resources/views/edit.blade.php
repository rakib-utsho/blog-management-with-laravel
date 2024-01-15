@extends('mainmenu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Update Blog</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Blog Title</label>
                                <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" value="{{ $blog->author_name }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-control">
                                    <option>{{ $blog->category->name }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Blog Image</label>
                                <img src="{{ asset($blog->image) }}" alt="No Image" width="100px">
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Blog Description</label>
                                <textarea name="description" class="form-control"> {{ $blog->description }} </textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
