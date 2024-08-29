<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <!-- style css -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="cart.css">
     <link rel="stylesheet" href="product/css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
 <script src="https://kit.fontawesome.com/cc8c4f6edc.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   
  </style>
<body>
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" >
      <img src="image/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="products.php">Product</a></li>
        <li class="nav-item"><a class="nav-link" href="testingdepart.php">Testing Department</a></li>
        <li class="nav-item"><a class="nav-link" href="whyus.php">Why Us</a></li>
        <li class="nav-item"><a class="nav-link" href="About us.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <!-- Dropdown menu for admin panel -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAdmin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin Panel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownAdmin">
            <li><a class="dropdown-item" href="../admin/pages/signin.php">Dashboard</a></li>
            <!-- Add other admin panel links here -->
          </ul>
        </li>
        <!-- End of admin panel dropdown -->
      </ul>
      <form class="d-flex">
        <a href="cart.php" class="btn btn-outline-light me-2">Cart <i class="fas fa-shopping-cart"></i></a>
        <a href="userlogin.php" class="btn btn-outline-light me-2">Login <i class="fas fa-user"></i></a>
        <a href="userlogout.php" class="btn btn-outline-light">Logout <i class="fas fa-user"></i></a>
      </form>
    </div>
  </div>
</nav>
  
  <div class="container-fluid" id="banner">
 
    </div>
    
      




    <!-- table start -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>Serial No:</th>
                            <th>Product Name</th>
                            <th>Product Price</th>   
                            <th>Quantity</th>
                            <th>Total</th>
</tr>
</thead>

         <tbody>
         
                <?php
                include('connection.php');
                session_start();
                if(isset($_SESSION['cart']))
                {
                    foreach($_SESSION['cart'] as $key => $value)
                    { $row = $key + 1;
                echo"
                <tr>
                <td>$row</td>
                <td> $value[productName]</td>
                <td> $value[productPrice] <input type='hidden' class='price' value='$value[productPrice]'></td>
                <td> <input type='number' class='form-control quantity' onchange='total()' value= '$value[Quantity]' min='1' max='20'> </td>
                
                <td class='sub_total'></td>
                <td>
                <form action='insertCart.php' method='POST'>
                <input type='hidden' name= 'product_name' value='$value[productName]'>
                <button name='remove_item' class='btn btn-dark '>Remove</button>
                </form>
                </td>
               </tr>";

                   }}?>


</tbody>
 </table>
            </div>
            
            <div class="col-md-3 mt-3 border text-center border border-4 border-dark h-5 mt-3">
                <h3 class="fw-bold ">GrandTotal<h3>
                    <p id='gtotal'></p>
                  
                    <a href="checkout.php" class="btn btn-dark">Checkout</a>
            </div>
        </div>
    </div>


    <script> 
             var gt=0;
        var price = document.getElementsByClassName('price');
var quantity = document.getElementsByClassName('quantity');
var sub_total = document.getElementsByClassName('sub_total');
var  gtotal = document.getElementById('gtotal');

 function total(){
    gt=0;
for(i=0; i<price.length;i++)
{
   
    sub_total[i].innerText = (price[i].value) * (quantity[i].value);
    gt= gt+(price[i].value) * (quantity[i].value);
    // console.log(sub_total)
    gtotal.innerText=gt;
}

}
total();

        </script>
        <br>
        <br>
        <br>

<?php include "footer.php"?>