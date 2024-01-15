@extends('mainmenu')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>All Categories</h1>
                    </div>
                    <div class="card-body">

                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
