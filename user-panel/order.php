<?php
session_start();
    if(!$_SESSION['userEmail'])
    {      header('location:signin.php');
  }
 ?>


<?php
include('connection.php');
if(isset($_POST['order_now']))
{
    $firstname=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $bank_account=$_POST['bank_account'];
    $upload_testing=$_FILES['upload_testing']['name'];
    $temp=$_FILES['upload_testing']['tmp_name'];
    $n_component=$_POST['n_component'];
    $id= $_POST['user_id'];
    $details=$_POST['component_detail'];
    move_uploaded_file($temp, "testing_upload/".$upload_testing);

        $sql="insert into order_now(fisrt_name, last_name,phone,  company_name, 	company_email, company_bank_account, testing_brief, component_name , component_detail, status ,user_id )
        values ( '$firstname', '$last_name',  $phone ,'$c_name', '$c_email' , '$bank_account' ,'$upload_testing' ,'$n_component' , '$details' , 'Pending' , $id)";
        mysqli_query($connect,$sql);
        echo"your registration is complete";

 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" href="custom.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
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
/* Global Styles */

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
}

/* Form Styles */

.card {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  padding: 20px;
  margin: 20px;
}

.card-body {
  padding: 20px;
}

.form-label {
  font-weight: bold;
  margin-bottom: 10px;
}

.form-control {
  width: 100%;
  height: 40px;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-control:focus {
  border-color: #aaa;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.mb-3 {
  margin-bottom: 20px;
}


.text-center {
  text-align: center;
}
 </style>
<body>
<div >

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="mb-0 text-center text-light">Book Your Testing Below</h4>
        </div>
        <div class="card-body">
          <!-- Registration Form -->
          <form action="" method="post" enctype="multipart/form-data" >
            <!-- Personal Information Section -->
            <h5 class="mb-3">Personal Information</h5>
            <div class="row">
            <div class="col-md-6 mb-3">
              <?php
              include("connection.php");
              // session_start();
              $email = $_SESSION['userEmail'];
              // $select ="select user_id from registration where user_email = '$email'";
              $select ="select user_id from registration where user_email='$email' ";
              $result =mysqli_query($connect , $select);
              if(mysqli_num_rows($result))
              {
                while($row=mysqli_fetch_array($result))
                {
              

              ?>
                <label for="UserID">User Id</label>
 <input type="number"  class="form-control"   value='<?php  echo $row['user_id']?>' name="user_id">
                <?php
                }}?>
              </div>
              <div class="col-md-6 mb-3">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" required>
              </div>
            </div>


            <div class="mb-3">
              <label for="phone">Phone</label>
              <input type="number" class="form-control" id="phone" name="phone" required>
            </div>

            <!-- Address Section -->
 
         
      

            <!-- Comapny Section -->

            <h5 class="mb-3">Company Info</h5>
            <div class="mb-3">
              <label for="address">Company Name</label>
              <input type="text" class="form-control" id="address" name="c_name" required>
            </div>
            <div class="mb-3">
              <label for="email">Company Email</label>
              <input type="text" class="form-control" id="email" name="c_email" required>
            </div>
            <!-- <div class="row">
              <div class="col-md-6 mb-3">
                <label for="city">Comapny Landline</label>
                <input type="text" class="form-control" id="city" name="city" required>
              </div> -->
              <div class="col-md-6 mb-3">
                <label for="city">Company Bank Account</label>
                <select class="form-select" name="bank_account">
                    <option class="option">Select Your Bank Company Account</option>
                    <option class="option">Allied Aitebar Islamic Banking.</option>
                    <option class="option">Meezan Bank Limited.</option>
                    <option class="option">Soneri Bank Limited</option>
                    <option class="option">Dubai Islamic Bank</option>
                    <option class="option">Askari Bank Ltd</option>
                    <option class="option">Bank Alfalah Islamic</option>
                    <option class="option">Habib Bank Limited</option>
                
                </select>
              </div>
            

            <!-- Password Section -->
            <h5 class="mb-3">Description</h5>
            <div class="mb-3">
              <label for="">Upload Testing Brief Here</label>
              <input type="file" class="form-control mt-1" required name="upload_testing">
            </div>
            <div class="mb-3">
              <label for="text">Name Of Component</label>
              <input type="text" class="form-control mt-1" required name="n_component">
            </div>
            <div class="mb-3">
              <label for="text">Component Details</label>
              <input type="text" class="form-control mt-1" required name="component_detail">
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="btn" name="order_now">Order Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
