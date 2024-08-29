<?php
include('connection.php');
$id= $_GET['update'];
$select_query="select * from product where id=$id ";
$result=mysqli_query($connect,$select_query);
// (mysqli_num_row) check the number of row
$data=mysqli_fetch_array($result);
if(isset($_POST['update']))
 {
 $name=$_POST['n'];
 $price=$_POST['pr'];
 $category=$_POST['s'];
 $image = $_FILES['img']['name'];
 $temp = $_FILES['img']['tmp_name'];
 move_uploaded_file($temp, "img/".$image);
 $update= "update product set name ='$name', price=$price ,
 image ='$image', category='$category' where id=$id";
 mysqli_query($connect,$update);
 header('location:addproduct.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto mt-5 border border-dark shadow  ">
                <form method="post" enctype="multipart/form-data">
                    <legend class="mx-auto">UDATE PRODUCT<legend>
                    <label> Product Name</label>
                    <input type="text" name="n" placeholder="Enter product name" class="form-control md-3" value="<?php echo $data['name'] ?>">
                    <label> Product Price</label>
                    <input type="number" name="pr" placeholder="Enter product price" class="form-control md-3"  value="<?php echo $data['price'] ?>">
                    <label> Product Image</label>
                    <input type="file" name="img" placeholder="Enter product image" class="form-control md-3">
                            <img class="mb-3"src="<?php echo "img/".$data['image'] ?>"width="100px" height="100px">
                    <label> product Category</label>
                    <select class="form-select mb-3" name="s">
                    <option value="Product">Product</option>
                         <option value="Switches">Switches</option>
                         <option value="Resistors">Resistors</option>
                         <option value="Capacitors">Capacitors</option>
                         <option value="Fuses">Fuses</option>
                         <option value="Sockets">Sockets</option>
                         <option value="Intergrated Circuits">Intergrated Circuits</option>
                         <option value="Batteries">Batteries</option>
                         <option value="Programmable Device">Programmable Device</option>
                         <option value="Vacuum Tubes (valves)">Vacuum Tubes (valves)</option>
                         <option value="Magnetic (inductive) devices">Magnetic (inductive) devices</option>
                         <option value="Power Sources">Power Sources</option>
                         <option value="Memristor">Memristor</option>
                   </select>
                   <button class="btn btn-dark mb-3" name="update">Update product</button>
 
</form>
            </div>
        </div>
    </div>