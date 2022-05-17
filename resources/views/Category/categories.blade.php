@extends('Layout.template')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
</head>

<body>
    @section('content')
    @endsection
    @section('cardcontent')
        @if (session('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        <div>
            <h2 class="mt-5">Categories</h2>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary float-right" href="{{ url('/add-category') }}">Add Category</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CategoryCode</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->CategoryCode }}</td>
                        <td>{{ $category->Description }}</td>
                        <td><a class="btn btn-primary mr-md-2" href="{{ url('/edit-category/' . $category->id) }}">Edit</a>
                        </td>
                        <div>
                            <td><a class="btn btn-danger ml-md-4" type="submit" class="btn btn-info btn-danger"
                                    data-toggle="modal" data-target="#myModal{{ $category->id }}">Delete</a></td>
                        </div>

                    </tr>
                    @include('Modal.deletecategory')
                @endforeach
            @endsection
</body>
