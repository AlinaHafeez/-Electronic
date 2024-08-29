<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="product/css.css">
  <title>Document</title>
  
</head>
<style>
  .container {
    width: 50%;
    margin: auto;
    padding-top: 5rem; /* Adjusted margin-top for better spacing */
}

/* Center the form */
.form-center {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Style form elements */
.form-label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ced4da;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

/* Hover effect on form inputs */
.form-control:hover {
    border-color: #6c757d;
}

/* Style submit button */
.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 0.5rem 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Hover effect on submit button */
.btn-primary:hover {
    background-color: #0056b3;
}
  </style>
<body>
  

<?php
include('connection.php');
session_start();
if(!$_SESSION['user_email'])
{
   header('location:userlogin.php');
 
}

?>






<?php
include('connection.php');
if(isset($_POST['submit_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['add'];
    $city = $_POST['city'];
    $Credit = $_POST['c_number'];

    $insert = "INSERT INTO check_in (name, email, address, city, Credit_Card_Number) VALUES ('$name', '$email', '$address', '$city', '$Credit')";
    $result = mysqli_query($connect, $insert);

    if (!$result) {
        echo "Error: ". mysqli_error($connect);
    } else {
        echo "<script>alert('Registration Complete')</script>";
        header('location:userlogin.php');
    }
}
?>

<div class="container mt-5 w-50">
  <h2 class="mb-4 text-center">Checkout Form</h2>
  
  <form action="" method="post">
    <div class="mb-3">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required name="name">
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" required name="email">
    </div>
    
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your address" required name="add">
    </div>

    <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" placeholder="Enter your city" required name="city">
    </div>

    <div class="mb-3">
      <label for="cardNumber" class="form-label">Credit Card Number</label>
      <input type="number" class="form-control" id="cardNumber" placeholder="Enter your card number" name="c_number" required>
    </div>


    <button type="submit" class="btn btn-primary" name="submit_btn" ><a href="cart.php">Submit</a></button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
