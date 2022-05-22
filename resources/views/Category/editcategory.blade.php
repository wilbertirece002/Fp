@extends('Layout.template')
@extends('Layout.navbar')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    @section('cardcontent')
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alet-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <h1 class="mb-4 mt-4">Edit category here.</h1>
        <form class="row g-3" method="post" action="{{ url('/update-category/' . $categories->id) }}">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label for="CategoryCode" class="form-label">Category Code</label>
                <input type="text" name="CategoryCode" value="{{ old('CategoryCode') ?? $categories->CategoryCode }}"
                    class="form-control">
            </div>
            <div class="col-md-6">
                <label for="Description" class="form-label">Description</label>
                <input type="text" name="Description" value="{{ old('Description') ?? $categories->Description }}"
                    class="form-control">
            </div>
            <div class="col-12  ">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{url()->previous()}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    @endsection
</body>

</html>
