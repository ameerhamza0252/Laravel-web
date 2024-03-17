<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        .Options{
            display:flex;
            justify-content:center;
            align-items:center;
            color:#fff;
            min-width:12rem;
            height:5rem;
            background-color:#203354;
            padding:10px;
            border-radius:10px;
            transition:0.2s;
        }
        .Options:hover{
            transform:translateY(-5px)
        }
        .container{
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            gap:10px;
            text-align:center;
            max-width:100%;
            margin:auto;
            align-items:center;
            justify-content:center;
            margin-top:5vh;
        }
    </style>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight Options">
            Bunny Baker's Admin Panel
        </h2>
        <div class="container">
            <a href="{{ url('/products') }}" class="Options">Listed Products</a>
            <a href="{{ url('/addproductview') }}" class="Options">Add Product</a>
            <a href="{{url('/')}}" class="Options">Home</a>
            <a href="{{url('/profile')}}" class="Options">Admin Profile</a>
            <a href="{{url('/Admin')}}" class="Options">Admin Panel</a>
        </div>
    </x-slot>

</x-app-layout>
</body>
</html>

