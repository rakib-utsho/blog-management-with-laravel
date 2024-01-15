@extends('mainmenu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Update Category</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('categories.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
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
