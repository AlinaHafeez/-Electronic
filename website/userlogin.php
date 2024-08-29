<?php
include('connection.php');
if(isset($_POST['adminlogin']))
{
    $emailvariable = $_POST['email'];
    $passwordvariable =$_POST['password'];
    $sql ="Select email,password from singup where email='$emailvariable' and password='$passwordvariable'";
    $result=mysqli_query($connect, $sql);
    //musqli_num_rows
    $num =mysqli_num_rows($result);
    session_start();
    if($num &&  $emailvariable!="" &&  $passwordvariable!="")
    {
      $_SESSION['user_email']=$emailvariable;
        echo "<script> alert('Login successfully');</script>";
        header('location:index.php');
    }
    else
    {
        echo "<script> alert('Login denied');</script>";
    }
}

?>

<!-- 
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  
    <link rel="stylesheet" href="signup.css" />
  </head>
  <body>
    <section class="container">
      <header>User Login</header>
      <form method="post" action="" class="form">


        <div class="input-box">
          <label>Email Address</label>
          <input type="email" placeholder="Enter email address" name="email" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Enter Password</label>
            <input type="password" placeholder="Enter Password"  name="password" required />
          </div>
        </div>
        <button class="btn btn-dark text-light" name="adminlogin">login</button>
      
        <button class="btn btn-dark text-light">  <a href="signup.php">signup</button></a>
      </form>
    </section>
  </body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">

</head>
<style>
    body {
  font-family: "Acme";
}
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.login{
    width: 900px;  
    min-height: 500px;  
    overflow: hidden;
    border-radius: 5px;
    background: #222;
    display: flex;
    box-shadow: 15px 5px 30px rgba(0, 0, 0,0.3);
}
.content{
    flex-basis: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #00b894;
    transition: 0.5s;
}
.content img{
    width: 100%;
}

.loginform{
    flex-basis: 50%;
    background: #333;
    font-family: Acme;
    padding: 25px;
}
.loginform h1{
    text-align: center;
    margin-top: 25px;
    font-size: 2.5em;
    margin-bottom: 50px;
    color: #fff;
}
.tbox{
    border-radius: 3px;
    background: transparent;
    outline: none;
    border: 1px solid #55efc4;
    width: 100%;
    height: 35px;
    margin: 30px 0;
}
.tbox input{
    background: transparent;
    width: 90%;
    outline: none;
    border: 0;
    padding-left: 5px;
    color: #fff; 
    padding: 0 30px 0 5px; 
    
}
::placeholder{
    color: #777;
}
.tbox i{
    color: #55efc4;
    font-size: 15px;
    padding: 7px;
    right: 5px;
}
.btn{
    width: 100%;
    border: 0;
    border-radius: 5px;
    background: #00b894;
    color: #fff;
    padding: 12px;
    font-size: 18px;
    font-family: Acme;
}
.social{
    margin-top: 25px;
    list-style: none;
    text-align: center;
}
.social li{
    display: inline-block;
}
.social li i{
    height: 35px;
    width: 35px;
    line-height: 35px;
    border: 1px solid #55efc4;
    border-radius: 50%;
    font-size: 18px;
    color: #fff;
}


/* Responsive adjustments */
@media (max-width: 768px) {
        .login {
            flex-direction: column;
            min-height: 600px;
        }
        .content, .loginform {
            flex-basis: 100%;
        }
        .loginform h1 {
            font-size: 2em;
        }
        .btn, .tbox {
            margin-bottom: 20px;
        }
    }

    .registration-prompt span {
    color: #ccc; 
}

.registration-prompt a {
    color: #55efc4; 
    text-decoration: none; 
}

.registration-prompt a:hover {
    text-decoration: underline; 
}

.social li i {
    height: 35px;
    width: 35px;
    line-height: 35px;
    border: 1px solid #55efc4;
    border-radius: 50%;
    font-size: 18px;
    color: #fff;
    cursor: pointer; 
    transition: background-color 0.3s, color 0.3s; 
}
.social li i:hover {
    background-color: #55efc4; 
    color: #333; 
}
</style>
<body>
    <div class="container">
        <div class="login">
            <div class="content">
                <img src="image/login.png" alt="Login Image">
            </div>
            <div class="loginform">
                <h1>Login</h1>
                <form onsubmit="return validateForm()" method="post" >
                    <div class="tbox">
                        <i class='bx bxs-user'></i>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="tbox">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class='bx bx-show' id="togglePassword" onclick="togglePasswordVisibility()" style="cursor: pointer;"></i>
                    </div>
                    <button type="submit" class="btn" name="adminlogin">Login</button>
                </form>
                <div class="registration-prompt" style="text-align: center; margin-top: 20px;">
                    <span>Don't have an account?</span> <a href="signup.php" style="color: #55efc4; text-decoration: none;">Register</a>
                </div>
                <ul class="social">
                    <li><i class='bx bxl-google' title="Google"></i></li>
                    <li><i class='bx bxl-twitter' title="Twitter"></i></li>
                    <li><i class='bx bxl-facebook' title="Facebook"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var togglePasswordIcon = document.getElementById('togglePassword');
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePasswordIcon.classList.replace('bx-show', 'bx-hide');
            } else {
                passwordInput.type = "password";
                togglePasswordIcon.classList.replace('bx-hide', 'bx-show');
            }
        }

        function validateForm() {
            var email = document.forms[0]["email"].value;
            var password = document.forms[0]["password"].value;
            if (email === "" || password === "") {
                alert("Please fill out all fields.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html> 
