@extends('admin.layouts.app')

@section('content')
    <title>Create Post</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="{{ route('posts.index') }}">Create Blog</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href="{{ route('posts.create') }}">Add Blog</a>
                </div>
            </div>
    </nav>

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Add a Post</h3>
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control"  name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5 " required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" id="author" name="author" required>
                    </div>
                    <div class="form-group">
                        <label for="postdate">Post Date</label>
                        <input type="date" class="form-control" id="postdate" name="postdate" required>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </div>
</div>
@endsection
