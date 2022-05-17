@extends('Layout.template')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div>
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
            <div class="justify-content">
                <h2 class="mt-5">Products</h2>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                <a class="btn btn-primary float-right" href="{{ url('/add-product') }}">Add Product</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        </th>
                        <th scope="col">Action</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->ProductName }}</td>
                            <td>{{ $product->ProductCode }}</td>
                            <td>{{ $product->category->CategoryCode ?? 'No Category' }}</td>
                            <td>{{ $product->Description }}</td>
                            <td>{{ $product->Color }}</td>
                            <td>{{ $product->Size }}</td>
                            <td>{{ $product->Price }}</td>
                            <td><a class="btn btn-primary mr-md-2"
                                    href="{{ url('/edit-product/' . $product->id) }}">Edit</a>
                            </td>
                            <div>
                                <td><a type="submit" class="btn btn-info btn-danger" data-toggle="modal"
                                        data-target="#myModal{{ $product->id }}">Delete</a></td>
                            </div>
                            @include('Modal.deletemodal')
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        @endsection

    </body>

    </html>
