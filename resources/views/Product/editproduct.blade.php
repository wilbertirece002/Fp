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
  <h1 class="mb-4 mt-4">Add product here.</h1>
  <form class="row g-3" method="post" action="{{ url('/update-product/'.$product->id) }}">
  {{ csrf_field()}}
  <div class="col-md-6">
    <label for="ProductName" class="form-label">Product Name</label>
    <input type="text" name="ProductName" value="{{old('ProductName') ?? $product->ProductName}}"  class="form-control">
  </div>
  <div class="col-md-6">
    <label for="productcode" class="form-label">Product Code</label>
    <input type="text" name="ProductCode" value="{{old('ProductCode') ?? $product->ProductCode}}" class="form-control" >
  </div>
  <div class="col-md-6">
    <label for="category" class="form-label">Category</label>
    <select  class="form-select" name="Category"  >
      @foreach ($categories as $category)
      <option>{{ $category->id }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-6">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" name="Description" value="{{old('Description') ?? $product->Description}}" placeholder="....">
  </div>
  <div class="col-12">
    <label for="color" class="form-label">Color</label>
    <input type="text" value="{{old('Color') ?? $product->Color}}" name="Color" class="form-control" placeholder="Color">
  </div>
  <div class="col-md-6">
    <label for="size" class="form-label">Size</label>
    <input type="text" name="Size" value="{{old('Size') ?? $product->Size}}" class="form-control" >
  </div>
  <div class="col-md-6">
    <label for="price" class="form-label">Price</label>
    <input type="text" name="Price" value="{{old('Price') ?? $product->Price}}" class="form-control">
  </div>
  <div class="col-12  ">
    <button type="submit" class="btn btn-primary"  >Save</button>
  </div>
</form>
  </div>
  </body>
</html>
