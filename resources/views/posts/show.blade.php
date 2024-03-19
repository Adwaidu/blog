@extends('admin.layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Post</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('posts.index') }}>Blog view</a>
            <div class="justify-end ">
            </div>
    </nav>
    <div class="container ">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h1 class="card-text" align="center">{{ $post->title }}</h1>
                </div>
                <div class="card-image">
                    <p class="card-text" ><img src="/images/{{$post->image}}" width="650px"></p>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $post-> description}}</p>
                </div>
                <div class="row">
                                <div class="col-sm">
                <div class="card-text">
                    Author:<h5 class="card-text">{{ $post-> author}}</h5>
                </div>
</div>
<div class="col-sm" align="right">
                <div class="card-text">
                   publish date: <p class="card-text">{{ $post-> postdate}}</p>
                </div>
</div>
                <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
</div>
<div class="col-sm">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
</div>
                </div>
</div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection