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
        body{
            background-color:#203354;
            color:#fff;
        }
        .cart{
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
        #bill{
            background:#fff;
            color:#203354;
            min-width:50%;
            font-size:1.5rem;
        }
        .btns{
            background-color:#203354;
            color:#fff;
        }
    </style>

    <title>Cart</title>
</head>
<body>
<table class="table" style="width:90%; margin:auto; margin-top:2vh;">
@php $Bill=0; @endphp
<h2 class="display-4" style="width:100%; margin:auto; margin-top:10vh; text-align:center;">Cart List</h2>
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse( $data as $key=>$item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->product_name}}</td>
                <td>{{$item->product_price}}</td>
                <td>
                    <a href="increase_Q/{{$item->id}}" class="btn btn-primary">+</a>
                    {{$item->product_quantity}}
                    <a  href="decrease_Q/{{$item->id}}" class="btn btn-secondary">-</a>
                </td>
                @php $Bill=($item->product_price*$item->product_quantity)+$Bill  @endphp
                <td><img src="uploads/{{($item->image)}}" width= '50' height='50' class="img img-responsive" /></td>
                <td>
                    <a href="delteitem/{{$item->id}}">Delete</a>
                </td>
            </tr>
            @empty
            <tr><td>No data Found</td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="cart">
        <span id="bill" class="btn btn">Total Bill: {{$Bill}}</span>
        <a href="/"><button class="btn btn btns">Add More Products</button></a>
        <a href="clear-cart"><button class="btn btn btns" style="background-color:red;">Clear Cart</button></a>

    </div>

</body>
</html>
