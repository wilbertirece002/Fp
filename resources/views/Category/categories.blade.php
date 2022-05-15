<!doctype html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Products</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            </head>
            <body>
<div class="container"> 
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
             <a class="nav-link active" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}">Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
            </li>
        </ul>
  </div>
    <div><h2 class="mt-5">Categories</h2></div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary float-right" href="{{url('/add-category')}}">Add Category</a>
    </div>
    <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">CategoryCode</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->CategoryCode}}</td>
                <td>{{ $category->Description }}</td>
                <td><a class="btn btn-primary mr-md-2" href="{{ url('/edit-category/'.$category->id) }}">Edit</a></td>
                <div><td><a class="btn btn-danger ml-md-4" href="{{ url('/delete-category/'.$category->id) }}">Delete</a></td></div>
                </tr>
            @endforeach
</div>
  </body>
  