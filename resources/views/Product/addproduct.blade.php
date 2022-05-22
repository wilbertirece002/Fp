@extends('Layout.template')
@extends('Layout.navbar')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
</head>

<body>
    @section('cardcontent')
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <div>
            <h1 class="mb-4 mt-4">Add product</h1>
        </div>

        <form class="row g-3" method="post" action="{{ url('/add-product') }}">
            {{ csrf_field() }}

            <div class="col-md-6">
                <label for="ProductName" class="form-label">Product Name</label>
                <input type="text" name="ProductName" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="productcode" class="form-label"</label>Product Code</label>
                <input type="text" name="ProductCode" class="form-control" value{{ old('ProductCode') }} required>
            </div>
            <div class="col-md-6">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="Category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->id }}
                    @endforeach
                    </option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label" >Description</label>
                <input type="text" class="form-control" name="Description" placeholder="...." >
            </div>
            <div class="col-12">
                <label for="color" class="form-label">Color</label>
                <input type="text" name="Color" class="form-control" placeholder="Color">
            </div>
            <div class="col-md-6">
                <label for="size" class="form-label">Size</label>
                <input type="text" name="Size" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="Price" class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" href="{{ url('/add-product') }}">Add</button>
                <a href="{{url()->previous()}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        </div>
    @endsection()
</body>

</html>
