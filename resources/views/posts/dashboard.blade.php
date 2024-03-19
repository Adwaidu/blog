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

    <title>Laravel index</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('posts.index') }}>Dashboard</a>
            <div class="justify-end ">
                
            </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      
      <th scope="col">Author</th>
      <th scope="col">Postdate</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td><img src="/images/{{$post->image}}" width="100px"></td>
      <td>{{$post->title}}</td>
      
      <td>{{$post->author}}</td>
      <td>{{$post->postdate}}</td>
      <td>
      <div class="col-sm">
                                    <a href="/posts/{{$post->id}}"
                                        class="btn btn-success btn-sm">view</a>
                                </div>
</td>
    </tr>
    @endforeach
  </tbody>
</table>

                       
        </div>
    </div>
@endsection