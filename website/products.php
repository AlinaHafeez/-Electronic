<style>
    /*** Header ***/
    .header-carousel .owl-carousel-inner {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        background: rgba(0, 0, 0, .5);
    }

    @media (max-width: 768px) {
        .header-carousel .owl-carousel-item {
            position: relative;
            min-height: 600px;
        }

        .header-carousel .owl-carousel-item img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-carousel .owl-carousel-item p {
            font-size: 16px !important;
        }
    }

    .header-carousel .owl-nav {
        position: relative;
        width: 80px;
        height: 80px;
        margin: -40px auto 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header-carousel .owl-nav::before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: #FFFFFF;
        transform: rotate(45deg);
    }

    .header-carousel .owl-nav .owl-prev,
    .header-carousel .owl-nav .owl-next {
        position: relative;
        font-size: 40px;
        color: #FFFFFF;
        transition: .5s;
        z-index: 1;
    }

    .header-carousel .owl-nav .owl-prev:hover,
    .header-carousel .owl-nav .owl-next:hover {
        color: #65CCB8;
    }

    .page-header {
        margin-bottom: 6rem;
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/carousel-1.jpg) center center no-repeat;
        background-size: cover;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        color: #FFFFFF;
    }
#banner{
    background-color: #72EBC0;
}


    #heading{
        text-align:"center";
    }
    </style>
<?php include "header.php"?>


 <!-- Page Header Start -->
 <div class="container-fluid page-header py-6" id="banner">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Shop Now</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-primary active" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    


    <!-- product -->
    <div class="container-fluid text-center" id="heading">
        <h1 id="shop-now">Products</h1>
    </div>


    <div class="container-fluid" id="section-2">
        <div class="row">
            <div class="col-3 ">



                <h2 class="text-center mb-4  mt-5">Catogory</h2>
                <div class="container-fluid ps-5 display-sm-none">
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1"> <a class="text-dark fw-bold"
                                href="products.php">Home</a></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1"> <a class="text-dark fw-bold"
                                href="resistor.php">Resistors</a></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1"><a class="text-dark fw-bold"
                                href="batteries.php">Batteries</a></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1"> <a class="text-dark fw-bold"
                                href="switches.php">Switches</a></label>
                    </div>
                  
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1"><a class="text-dark fw-bold"
                                href="capicitor.php">Capicitors</a></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1"><a class="text-dark fw-bold"
                                href="fuses.php">Fuses</a></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1"><a class="text-dark fw-bold"
                                href="scoket.php">Sockets</a></label>
                    </div>
                
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label  text-dark fw-bold" for="exampleCheck1">Integrated
                            Circuits</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-dark fw-bold" for="exampleCheck1">Programmable
                            devices</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-dark fw-bold " for="exampleCheck1">Vacuum tubes
                            (valves)</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-dark fw-bold " for="exampleCheck1">Magnetic (inductive)
                            devices</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-dark fw-bold" for="exampleCheck1">Power sources</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="me-2 form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-dark fw-bold" for="exampleCheck1">Memristor</label>
                    </div>

                </div>

            </div>

            <div class="col-9 ">
               <div  class="container-fluid mb-5">

                    <div class="d-flex justify-content-center row">
                        <div class="col-md-10" id="product-section">
                        <div class="container text-center bg-dark fw-bold text-light mt-3 fs-5">
    <h1 class="fs-2"> Product <h1>
</div>

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
                if($check_page=='Product')
                {
        ?>

<div class="col-md-3 text-center m-auto card ms-2 mt-3">
        <form method="post" action="insertCart.php">
            <h1 class="fs-5 pt-3"><?php echo $data['name'] ?><h1>
                <img src="<?php echo "img/".$data['image'] ?>" width="100px" class="pt-3">
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
</div>
            </div>

        </div>
    </div>





<?php include "footer.php"?>