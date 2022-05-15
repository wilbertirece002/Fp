<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
  </head>
  <body>
  <div class="container" >
  <h1 class="mb-4 mt-4">Add new Category here.</h1>
  <form class="row g-3" method="post" action="{{ url('/add-category') }}">
  {{ csrf_field()}}
  <div class="col-md-6">
    <label for="CategoryCode" class="form-label">Category Code</label>
    <input type="text" name="CategoryCode" class="form-control">
  </div>
  <div class="col-md-6">
    <label for="Description" class="form-label">Description</label>
    <input type="text" name="Description" class="form-control" >
  </div>
  <div class="col-12  ">
    <button type="submit" class="btn btn-primary" href="{{ url('/add-category') }} " >Add</button>
  </div>
</form>
  </div>
  </body>
</html>
