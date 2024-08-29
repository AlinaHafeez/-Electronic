<?php include "header.php"?>




    <div class="container-fluid" id="main-banner">
    </div>
    <h1 class="text-center animate__animated animate__fadeInUp" id="precision-electrics-heading">SRS ELECTRICS
    </h1>
    <h6 class="text-center animate__animated animate__fadeInUp" id="slogan">Empowering Reliability, One Appliance at
        a
        Time.</h6>

<div class="container">
    <div class="row">
        <?php
        include('connection.php');
        $select = "select name,price,image,category  from product";
        $result=mysqli_query($connect,$select);
        if(mysqli_num_rows($result))
        {
            while($data=mysqli_fetch_array($result))
            {
                $check_page=$data['category'];
                if($check_page=='Switches')
                {
        ?>
  
<div class="col-md-3 text-center m-auto card ms-2 mt-3">
        <form method="post" action="insertCart.php">
            <h1 class="fs-5 pt-3"><?php echo $data['name'] ?><h1>
                <img src="<?php echo "img/".$data['image'] ?>" width="150px" class="pt-3">
                <p class="fs-5 pt-3"> PKR<?php echo $data['price'] ?>/-</p> 
                <input  type="hidden" name="p_name" value="<?php echo $data['name']?>">
                <input type="hidden" name="p_price"  value="<?php echo $data['price']?>">
                <!-- <input type='number' name='quantity' value= ` min = '1' max ='20'  ` class='form-control mb-3' placeholder='Select Quantity'> -->
                <button class="btn btn-dark" name="AddCart">Add to cart</button>
                </form>

        </div>
        <?php
            }
        }}
        ?>
    </div>
    </div>

    <?php include "footer.php"?>