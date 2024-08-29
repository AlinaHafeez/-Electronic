<?php
include('connection.php');
if(isset($_POST['signup_btn']))
{
    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];

    $select ="select email from singup where email='$email'";
    $check_mail =mysqli_query($connect,$select);
    session_start();
    if(mysqli_num_rows($check_mail)>0)
    {
      $_SESSION['admin_login']=$email;
        echo"<script> alert('Email Already Exists')</script>";
    }
    else
    {
        $sql="insert into singup(name, email, password)
        values ('$name', '$email', '$password')";
        mysqli_query($connect,$sql);
        echo"your registration is complete";
        header('location:userlogin.php');
    }
 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
</head>
<style>
    body{
        font-family: Acme;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .login {
        width: 900px;
        min-height: 500px;
        overflow: hidden;
        border-radius: 5px;
        background: #222;
        display: flex;
        box-shadow: 15px 5px 30px rgba(0, 0, 0,0.3);
    }
    .content {
        flex-basis: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #00b894;
        transition: 0.5s;
    }
    .content img {
        width: 100%;
    }
    .loginform {
        flex-basis: 50%;
        background: #333;
        font-family: Acme;
        padding: 25px;
    }
    .loginform h1 {
        text-align: center;
        margin-top: 25px;
        font-size: 2.5em;
        margin-bottom: 50px;
        color: #fff;
    }
    .tbox {
        border-radius: 3px;
        background: transparent;
        outline: none;
        border: 1px solid #55efc4;
        width: 100%;
        height: 35px;
        margin: 30px 0;
    }
    .tbox input {
        background: transparent;
        width: 90%;
        outline: none;
        border: 0;
        padding-left: 5px;
        color: #fff;
        padding: 0 30px 0 5px;
    }
    ::placeholder {
        color: #777;
    }
    .tbox i {
        color: #55efc4;
        font-size: 15px;
        padding: 7px;
        right: 5px;
    }
    .btn {
        width: 100%;
        border: 0;
        border-radius: 5px;
        background: #00b894;
        color: #fff;
        padding: 12px;
        font-size: 18px;
        font-family: Acme;
    }
    .social {
        margin-top: 25px;
        list-style: none;
        text-align: center;
    }
    .social li {
        display: inline-block;
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
</style>
<body>
    <div class="container">
        <div class="login">
            <div class="content">
                <img src="image/register.png">
            </div>
            <div class="loginform">
                <h1>Register</h1>
                <form id="registrationForm" method="post">
                    <div class="tbox">
                        <i class='bx bxs-user'></i>
                        <input type="text" name="user_name" placeholder="Name" required>
                    </div>
                    <div class="tbox">
                        <i class='bx bxs-envelope'></i>
                        <input type="email" name="user_email" placeholder="Email" required>
                    </div>
                    <div class="tbox">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" name="user_password" id="password" placeholder="Password" required>
                        <i class='bx bx-show' id="togglePassword" style="cursor: pointer;"></i>
                    </div>
                    <button class="btn btn-dark mb-3" name="signup_btn">Create Account</button>
                    <br>
                    <br>
                   <button class="btn btn-dark mb-3" name=""> <a class="text-light text-decoration-none" href="userlogin.php">Login</a></button>
                    <!-- <button class="btn"  name="signup_btn">Register</button> -->
                    <ul class="social">
                        <li><i class='bx bxl-google' title="Google"></i></li>
                        <li><i class='bx bxl-twitter' title="Twitter"></i></li>
                        <li><i class='bx bxl-facebook' title="Facebook"></i></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('registrationForm').onsubmit = function(e) {
            if (!this.checkValidity()) {
                e.preventDefault();  // Prevent form submission
                alert('Please fill out all required fields.');
            }
        };

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

        document.getElementById('togglePassword').onclick = togglePasswordVisibility;
    </script>
</body>
</html>
