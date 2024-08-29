<?php
include('connection.php');
if(isset($_POST['admin_signup']))
{
    $name = $_POST['admin_name'];
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];
    $select = "select * from admin where admin_email ='$email'";
    $check= mysqli_query($connect, $select);

    if(mysqli_num_rows($check)>0)
    {
        echo "<script>alert ('Email Already Exist') </script>";

    }
    else{
        $insert ="insert into admin(admin_name, admin_email, admin_password)
        values ('$name', '$email', '$password')";
        mysqli_query($connect, $insert);
        echo "<script>alert ('You Have Succesfully Add An Admin') </script>";
        
    }

}

?>
<?php include "header.php"?>
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

            <!-- Form Start -->
            <div class="col-12 grid-margin stretch-card t-20">
    <div class="card">
        <div class="card-body">
                            <form method="post">
                                <div class="mb-3">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                      name="admin_name"  aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                       name="admin_email" aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1"
                                       name="admin_password"   aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn  text-center" name="admin_signup">Add Admin</button>
                            </form>
</div>
                        </div>
                    </div>
            <!-- Form End -->


<?php include "footer.php"?>