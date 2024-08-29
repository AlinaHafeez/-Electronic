<?php

include('connection.php');
if(isset($_POST['p']))
{
    $name=$_POST['n'];
    $price=$_POST['pr'];
    $image=$_FILES['img']['name'];
    $temp =$_FILES['img']['tmp_name'];
    move_uploaded_file($temp, "img/".$image);
    $category=$_POST['s'];
    if($name!="" && $price!="" && $image!="" && $category!="")
    {
        $sql="insert into product (name,price,image,category)
        values('$name', $price, '$image', '$category')" ;
        mysqli_query($connect,$sql);
        echo "product inserted";
        
    }
    else{
        echo "Fields Cant Be Empty');</script>";
    }
}




?>






<style>

.container{
    background: color #57ab98;
}
table {
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  background-color: #f0f0f0;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
form {
    width: 300px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

input[type="file"] {
    margin-bottom: 10px;
}

select {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

button {
    background-color: black; /* Green */
  border: none;
  color:  #57ba98;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

button:hover {
    background-color: black;
}
.btn {
    background-color: black; /* Green */
  border: none;
  color:  #57ba98;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>


  <form method="post" enctype="multipart/form-data">
    <!-- form elements here -->
  </form>
</div>
<body>
    <div class="container" name="">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5 border">
                <form method="post" enctype="multipart/form-data">
                    <legend >Add Your Product<legend>
                            <label class="mt-3 mb-3 fs-6"> Product Name</label>
                            <input type="text" name="n" placeholder="Enter product name" class="form-control md-3">
                            <label class="mt-3 mb-3 fs-6"> Product Price</label>
                            <input type="number" name="pr" placeholder="Enter product price" class="form-control md-3">
                            <label class="mt-3 mb-3 fs-6"> Product Image</label>
                            <input type="file" name="img" placeholder="Enter product image" class="form-control md-3">
                            <label class="mt-3 mb-3 fs-6"> product Category</label>
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
                            <button class="btn btn-primary mb-3" id="special" name="p">Publish To your Store</button>

                </form>
            </div>
        </div>
    </div>

    <!-- showproduct -->
    <div class="container-fluid">
        <div class="col-md-8 m-auto">
            <table class="table border-dark mt-3">
                <thead class="text-dark" id="product-table-border">
                    <tr>
                        <th class="fs-6">Product Id</th>
                        <th class="fs-6">Product Name</th>
                        <th class="fs-6">Product Price</th>
                        <th class="fs-6">Product Category</th>
                        <th class="fs-6">Product Image</th>
                        <th class="fs-6">Delete</th>
                        <th class="fs-6">Update</th>
                    </tr>
                </thead>

                <tbody class="text-dark">
                    <?php include('connection.php');
            $query="select * from product";
            $result= mysqli_query($connect, $query);
            if(mysqli_num_rows($result))
            {
                while($data=mysqli_fetch_array($result))

                { ?>
                    <tr>
                        <td>
                            <?php echo $data['id']?>
                        </td>
                        <td>
                            <?php echo $data['name']?>
                        </td>
                        <td>
                            <?php echo $data['price']?>
                        </td>
                        <td>
                            <?php echo $data['category']?>
                        </td>
                        <td><img src="<?php echo " img/".$data['image']; ?>"width="80px" height="100px"></td>
                        <td> <a class="btn btn-dark" href="delete.php?get_id=<?php echo $data['id']; ?>">Delete</a></td>
                        <td> <a class="btn "
                                href="update.php?update_id=<?php echo $data['id']; ?>">Update</a></td>

                        <?php

                }
            }
            ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>