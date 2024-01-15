@extends('mainmenu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Add Category</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('categories.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
