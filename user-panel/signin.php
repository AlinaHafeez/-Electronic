<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *,
*::after,
*::before {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  overflow: hidden;
  font-family: sans-serif;
}

section {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgb(45, 97, 135);
  background: radial-gradient(
    circle,
    rgba(45, 97, 135, 1) 0%,
    rgba(40, 171, 185, 1) 100%
  );
}

section .color {
  position: absolute;
  filter: blur(150px);
}

section .color:nth-child(1) {
  top: -350px;
  width: 600px;
  height: 600px;
  background-color: #794c74;
}

section .color:nth-child(2) {
  bottom: -150px;
  left: 100px;
  width: 500px;
  height: 500px;
  background-color: #effad3;
}

section .color:nth-child(3) {
  bottom: 50px;
  right: 100px;
  width: 300px;
  height: 300px;
  background-color: #590995;
}

.box {
  position: relative;
}

.box .square {
  position: absolute;
  backdrop-filter: blur(5px);
  box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  background-color: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-radius: 10px;
  animation: animate 5s linear infinite;
  animation-delay: calc(-1s * var(--i));
}

@keyframes animate {
  0%,
  100% {
    transform: translateY(-40px);
  }
  50% {
    transform: translateY(40px);
  }
}

.box .square:nth-child(1) {
  top: -50px;
  right: -50px;
  width: 100px;
  height: 100px;
}

.box .square:nth-child(2) {
  top: 150px;
  left: -100px;
  width: 120px;
  height: 200px;
  z-index: 2;
}

.box .square:nth-child(3) {
  bottom: 80px;
  right: -50px;
  width: 70px;
  height: 70px;
  z-index: 2;
}

.box .square:nth-child(4) {
  bottom: -60px;
  left: 100px;
  width: 50px;
  height: 50px;
  transform: rotate(10px);
}

.box .square:nth-child(5) {
  top: -60px;
  left: 150px;
  width: 60px;
  height: 60px;
}

.container {
  position: relative;
  width: 400px;
  min-height: 400px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(5px);
  box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.form {
  position: relative;
  width: 100%;
  height: 100%;
  padding: 40px;
}

.form h2 {
  position: relative;
  color: #fff;
  font-size: 24px;
  font-weight: 600;
  letter-spacing: 1px;
  margin-bottom: 40px;
}

.form h2::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 80px;
  height: 4px;
  background-color: #fff;
}

.form .input-group {
  width: 100%;
  margin-top: 20px;
}

.form .input-group input {
  width: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  padding: 10px 20px;
  font-size: 15px;
  letter-spacing: 1px;
  color: #fff;
  border: none;
  border-radius: 35px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  outline: none;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.form .input-group input::placeholder {
  color: #fff;
}

.form .input-group input[type="submit"] {
  max-width: 100px;
  margin-bottom: 20px;
  font-weight: 600;
  background-color: #fff;
  color: #000;
}

.forget {
  margin-top: 5px;
  color: #fff;
}

.forget a {
  color: #fff;
  font-weight: 600;
}

    </style>
<body>
<?php
include("connection.php");
if(isset($_POST['SignIn']))
{
    $Uemail=$_POST['Email'];
    $Upassword=$_POST['Password'];
    $select = "select user_email , user_password from registration
    where user_email = '$Uemail' and user_password = '$Upassword'";
    $result = mysqli_query($connect, $select);
    session_start();
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['userEmail']=$Uemail;
        echo "<script> window.location.href='index.php';</script>";

    }
    else{
        echo "<script>alert ('invalid input')</script>";
        
    }
}


?>
<section>
  <div class="color"></div>
  <div class="color"></div>
  <div class="color"></div>
  <div class="box">
    <div class="square" style="--i:0"></div>
    <div class="square" style="--i:1"></div>
    <div class="square" style="--i:2"></div>
    <div class="square" style="--i:3"></div>
    <div class="square" style="--i:4"></div>
    <div class="container">
      <div class="form">
        <h2>Login From</h2>
        <form action="#" method="post">
          <div class="input-group">
            <input type="text" placeholder="User Email" name="Email">
          </div>
          <div class="input-group">
            <input type="password" placeholder="Password" name="Password" >
          </div>
          <div class="input-group">
            <input type="submit" value="Login" name="SignIn">
          </div>
          <p class="forget">Forgot Password ? <a href="#">Click Here</a></p>
          <p class="forget">Don't have an account ? <a href="signup.php">Sign up</a></p>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>
</html>