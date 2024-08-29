
<?php

   include('connection.php');
   if(isset($_POST['admin_login']))
   {
    $admin_email = $_POST['email'];
    $admin_password = $_POST['password'];
    $select = "select admin_email , admin_password from admin
       where admin_email = '$admin_email' and admin_password = '$admin_password'";
       $result =mysqli_query( $connect, $select);
       session_start();
       if(mysqli_num_rows($result) > 0)
       {
        $_SESSION['admin_login'] =$admin_email;
        echo " <script> window.location.href='index.php';</script>
        "; 
       }
       else{
        echo " <script> alert('invalid input');</script>
        "; 
       }
   }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sigin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      * {
        box-sizing: border-box;
      }

      body {
       background-color:#57ba98;
        background-size: cover;
        background-position: center;
      }

      .conteiner {
        background: rgb(255 255 255 / 17%);
        width: 480px;
        transtorm: translate(-50%, -50%);
        margin: 100px auto;
        border-radius: 10px;
        padding: 30px;
      }

      h1 {
        color: #fff;
        font-size: 36px;
        text-align: center;
        padding: 10px 0;
      }

      input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        margin: 0;
        margin-bottom: 10px;
      }

      button {
        background: black;
        border: 0;
        padding: 10px;
        color: #fff;
        width: 100%;
        text-align: center;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 20px;
      }

      .sign {
        text-align: center;
        margin-top: 40px;
      }

      .logo img {
        width: 40px;
      }

      .logo {
        text-align: center;
        margin-top: 20px;
      }

      h2 {
        color: #fff;
        text-align: center;
      }

      h2 a {
        color: #3B5999;
      }
    </style>
  </head>
  <body>
    <div class="conteiner">
      <h2> Admin login</h2>
      <form method="POST">
        <label for="Admin"></label>
        <br>
        <input type="text" class="user" placeholder="email" name ="email" required>
        <br>
        <label for="password"></label>
        <br>
        <input type="password" placeholder=" Password" name ="password" required>
        <br>
        <br>
        <button type="submit" name="admin_login">Login</button>
       

      </form>
  </body>
</html>