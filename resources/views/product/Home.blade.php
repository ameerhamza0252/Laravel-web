<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <link rel="stylesheet" href="/footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
        .des{
            color:#5D6D7E;
            text-align:center;
            align-items:center;
            font-size:12px;
            min-height:100px;
            width:100%;
            overflow:hidden;
        }
        .pricetag{
            font-size:1.5rem;
            color:#DC7633;
            line-height:20px;
            text-align:center;
        }
        .card{
            display:flex;
            flex-direction:column;
            box-shadow:1px 1px 4px 1px #88898A;
            padding:12px;
            width:18rem;
            height:23rem;
            gap:10px;
            border-radius:10px;
            align-items:center;
        }
        .title{
            background-color:#DC7633;
            color:#fff;
            width:15rem;
            font-size:18px;
            text-align:center;
            border-top-left-radius:50px;
            border-Bottom-Right-Radius:50px;
        }
        .btn{
            background-color:#DC7633;
            color:#fff;
            border:none;
            transition:0.2s;
        }
        .heading{
            width:80%;
            margin:auto;
            font-size:1.3rem;
            text-align:center;
            margin-top:10vh;

        }
        .card-img-top:hover{
            scale:1.1;
            transform:rotate(5deg);
        }
        .header{
        position: sticky;
        top: 0%;
        width:100vw;
        height:70px;
        background-color: #DC7633;
        font-size:15px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        border-bottom-left-radius:10%;
        border-bottom-right-radius:10%;
        color: #ffff;
        z-index: 1;
        padding:0px 20px 0px;
        }
        .header i{
        color: #fff;
        display: block;
        width:fit-content;
        font-size: 18px;
        text-decoration-color: #fff;
        transition:0.2s;
        }
        .header ul{
        list-style: none;
        text-decoration: none;
        height:70px;
        color:#fff;
        display: flex;
        align-items:center;
        gap: 30px;
        margin-right:1vw;
        }
        .header ul i:hover{
        color: #ddd;
        transform:translateY(-3px);
        }
        .header_list a:hover{
            color:#fff;
        }
    </style>
</head>
<body>
<div class="header">
        <div style="display:flex;align-items:center;height:70px;justify-content:center;max-width:70%;padding:0;margin-bottom:15px;">
            <div><img src="/favicon.png" alt="/favicon.png" style="width:80px;height:80px;object-fit:contain;"/></div>
            <span style="font-size:2rem;">Bunny Baker's</span>
        </div>
        <div class="header_list" id="top">
            <ul>
                <li><a href="/"><i class="fa fa-fw fa-home txt02">Home</i></a></li>
                <li><a href="cart-index"><i class="fa fa-fw fa-shopping-cart txt02"> Cart</i></a></li>
                <li><a href="#contact"><i class="fa fa-fw fa-envelope txt02"> Contact</i></a></li>
            </ul>
        </div>
    </div>
    <div><h5 class="title heading" >Products</h5></div>
    <div style="display:flex; flex-direction:row; flex-wrap:wrap;gap:10px; min-height:10vh;justify-content:center;width:90%;margin:auto;margin-top:5vh;">
        @forelse( $products as $key=>$item)
        <div class="card">
        <div><img class="card-img-top" src="uploads/{{($item->image)}}" alt="Card image cap" style="width:100px;height:100px;object-fit:contain;margin:auto;transition:0.2s;"></div>
        <div><h5 class="title" >{{$item->Pname}}</h5></div>
        <div><h5 class="card-title pricetag">{{$item->Price}}$</h5></div>
        <div  class="card-text des"><span>{{$item->Description}}</span></div>
        <div>
            <a href="addtocart/{{$item->id}}" class="btn btn-primary"><i class="fa fa-fw fa-shopping-cart txt02"></i>Add to Cart</a>
        </div>
        </div>
            @empty
                No data Found
            @endforelse
    </div>

    <footer class="footer" id="contact">
  	 <div class="container2">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Bunny Bakers</h4>
  	 			<ul>
  	 				<li><a href="https://www.google.com">Online Recipies</a></li>
  	 				<li><a href="https://www.google.com">New Recipies</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Links</h4>
  	 			<ul>
  	 				<li><a href="https://www.google.com">Any Quries?</a></li>
  	 				<li><a href="https://www.google.com/">Help</a></li>

  	 			</ul>
  	 		</div>

  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://twitter.com/PforPanda1"><i class="fa fa-fw fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/d_x_diag/"><i class="fa fa-fw fa-instagram"></i></a>
  	 				<a href="https://www.linkedin.com/in/ameer-hamza-b7804523b/"><i class="fa fa-fw fa-linkedin"></i></a>
                    <a href="./Admin"><i class="fa fa-fw fa-group txt02"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
</body>
</html>
