<style>
.container-fluid.page-header {
    background-color:#72EBC0;
}


/* Simple floating animation for the 'About Us' heading */
@keyframes floatIn {
    0% {
        transform: translateY(20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

#about-us-heading.animated {
    animation: floatIn 1.5s ease-out;
}
  </style>
<?php include "header.php"?>


    <!-- Banner Section -->
    <div class="container-fluid page-header py-6" style="background-color: ##72EBC0;">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3" id="about-us-heading">Testing Department</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item text-primary active" aria-current="page"></li>
            </ol>
        </nav>
    </div>
</div>

  <br>
  <br>

  <div class="container-fluid text-center mt-4">
    <h1 class="animate__animated animate__fadeInDown" id="welcome-text">Welcome To Our Testing Department</h1>
  </div>

<br>
<br>
  <div class="container-fluid w-100 text-center  mb-3" id="section">


    <div class="row" id="stats">
      <div class="col  animate__animated animate__fadeInLeft">
        <img src="icons/staff.png" width="100px">
        <br>
        <span class="text-black"> 4000+ Satisfied Clients</span>
      </div>
      <div class="col  animate__animated animate__fadeInLeft">
        <img src="icons/inspection.png" width="100px">
        <br>
        <span class="text-black">12000+ Tested products</span>
      </div>
      <div class="col  animate__animated animate__fadeInLeft">
        <img src="icons/24-hours.png" width="100px">
        <br>
        <span class="text-black">24 Hours Of Support</span>
      </div>
      <div class="col  animate__animated animate__fadeInLeft">
        <img src="icons/staff.png" width="100px">
        <br>
        <span class="text-black">120+ Workers at a time</span>
      </div>
    </div>

  </div>
<br>
<br>
<br>
  <!-- Testing Process Start -->
  <div class="container-fluid text-center">
    <!-- classes -->
    <div class="container-fluid w-100" id="classes-main-div">
      <div class="row" id="classes-main-text">
        <div class="col font-bruno">
          <h1 class="text-black"><span class="special-text-green">Our</span>Testing Process</h1>
          <br>
          <h6 class="text-black">"Testing the Future, Perfecting Technology"</h6>
        </div>
      </div>
    </div>
    <center>
      <div class="container-fluid mt-5" id="classes-cards-div">
        <div class="row offset-sm-1">
          <div class="col-md-3 m-md-4 m-sm-1 overflow-hidden animate__animated animate__fadeInLeft" id="cards"><img src="classes/eye.png" class="w-100 mt-2" id="card-image">
            <h3 class="fs-4 mt-2 font-bruno">Visual Testing</h3>
            <h6 class="font-barlow">Step 1</h6>
          </div>
          <div class="col-md-3 m-md-4 m-sm-1 overflow-hidden animate__animated animate__fadeInLeft" id="cards"><img src="classes/functional.png" class="w-100 mt-2" id="card-image">
            <h3 class="fs-4 mt-2 font-bruno">Functional Testing</h3>
            <h6 class="font-barlow">Step 2</h6>
          </div>
          <div class="col-md-3 m-md-4 m-sm-1 overflow-hidden animate__animated animate__fadeInLeft" id="cards"><img src="classes/heat.png" class="w-100 mt-2" id="card-image">
            <h3 class="fs-4 mt-2 font-bruno">Heat Treatment</h3>
            <h6 class="font-barlow">Step 3</h6>
          </div>
          <div class="col-md-3 m-md-4 m-sm-1 overflow-hidden animate__animated animate__fadeInRight" id="cards"><img src="classes/high-voltage (1).png" class="w-100 mt-2" id="card-image">
            <h3 class="fs-4 mt-2 font-bruno">Voltage Testing</h3>
            <h6 class="font-barlow">Step 4</h6>
          </div>
          <div class="col-md-3 m-md-4 m-sm-1 overflow-hidden animate__animated animate__fadeInRight" id="cards"><img src="classes/electricity.png" class="w-100 mt-2" id="card-image">
            <h3 class="fs-4 mt-2 font-bruno">Amphere Testing</h3>
            <h6 class="font-barlow">Step 5</h6>
          </div>
          <div class="col-md-3 m-md-4 m-sm-1 overflow-hidden animate__animated animate__fadeInRight" id="cards"><img src="classes/bolt.png" class="w-100 mt-2" id="card-image">
            <h3 class="fs-4 mt-2 font-bruno">Current Flow Testing</h3>
            <h6 class="font-barlow">Step 6</h6>

          </div>

        </div>
      </div>
    </center>
    <!-- classes end -->
  </div>



  <!-- Book Your Order Now -->

  <div class="container p-5">
    <div class="row">
      <div class="col-12 py-3 text-center fs-1 text-black" id="testing_btn">
        Book Your Testing Below
      </div>
      <div class="col-12 pt-3 pb-3 text-center " id="testing_btn">
        <a href="../user-panel/index.php" type="button" value="Order Now" class="btn btn-primary">Order Now</a>
      </div>
    </div>
  </div>
<?php include "footer.php"?>







</body>

</html>