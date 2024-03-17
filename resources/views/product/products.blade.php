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

<style>
     .cart{
            position:sticky;
            top:0%;
            max-width:50%;
            min-height:5rem;
            margin:auto;
            background:#000;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-wrap:wrap;
            gap:10px;
            border-radius:10px;
        }
        .btns{
            background-color:#203354;
            color:#fff;
        }
</style>
    <title>Products</title>
</head>
<body>
<div class="cart">
        <a href="/dashboard"><button class="btn btn btns">Dashboard</button></a>
        <a href="/"><button class="btn btn btns">Home</button></a>
        <a href="/addproductview"><button class="btn btn btns">Add Product</button></a>
    </div>
<table class="table" style="width:90%; margin:auto;">
<h2 class="display-4" style="width:100%; margin:auto; margin-top:10vh; text-align:center;">List of Products</h2>
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse( $products as $key=>$item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->Pname}}</td>
                <td>{{$item->Price}}</td>
                <td>{{$item->Description}}</td>
                <td>{{$item->Quantity}}</td>
                <td><img src="uploads/{{($item->image)}}" width= '100' height='100' class="img img-responsive" /></td>
                <td>
                    <a href="editproduct/{{$item->id}}">Update</a>
                    <b>|</b>
                    <a href="deleteproduct/{{$item->id}}">Delete</a>
                </td>
            </tr>
            @empty
                No data Found
            @endforelse
        </tbody>
    </table>
</body>
</html>
