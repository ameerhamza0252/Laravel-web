<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Add Product</title>
</head>
<body>

        <form action="add-product" method="post" enctype="multipart/form-data" style="width:50%; margin:auto; margin-top:10vh;">
        @csrf
            <h2 class="display-4" style="width:100%; margin:auto; margin-top:10vh; text-align:center;">Add Products</h2>
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="Pname" class="form-control">
                    <label for="">Product Price</label>
                    <input type="text" name="Price"  class="form-control">
                    <label for="">Description</label>
                    <input type="text" name="Description"  class="form-control">
                    <label for="">Product Quantity</label>
                    <input type="number" name="Quantity"  class="form-control"><br>
                    <input type="file" name="image" id="" class="form-control"><br>
                    <input type="submit" value="Add Product" class="btn btn-primary">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                </div>
        </form>
</table>

</body>
</html>
