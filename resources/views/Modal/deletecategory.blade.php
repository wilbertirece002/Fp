<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="{{ url('delete-category/' . $category->id) }}" method="GET">
            {{ csrf_field() }}
            <div class="modal fade" id="myModal{{ $category->id }}" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Category</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete category
                                <strong>{{ $category->CategoryCode }}</strong>?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-defautl">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
