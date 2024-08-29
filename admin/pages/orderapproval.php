
<style>
    h1{
        text-align:center;
    }
.table {
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    border: 1px solid black;
    padding: 8px;
    transition: background-color 0.3s ease; /* Adding transition effect */
}

.table thead {
    background-color: #65CCBA;
    color: #fff;
}

.table th:hover,
.table td:hover {
    background-color: #57ba98; /* Changing background color on hover */
}
.btn {
    background-color: black; /* Green */
  border: none;
  color:  #57ba98;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    </style>
            <!-- Table Start -->
            <div class="container">
                <div class="row">
                        <div class="bg-light rounded h-50 w-100 p-4">
                            <h1>Order Approval</h1>
                            <table class="table border-dark">
                                <thead class="text-white" >
                                <tr >
                                        <th >Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>Company Name</th>
                                        <th>Company Email</th>
                                        <th>Company Bank Account</th>
                                        <th>Testing Brief</th>
                                        <th>Component Name</th>
                                        <th>Component Detail</th>
                                        <th>Status</th>
                                        <th>Approved</th>
                                        <th>Rejected</th>

                                    </tr>
                                </thead>
                             
                                    <?php
                                    include("connection.php");

                                    // $select = "select order_now.id, order_now.fist_name, order_now.last_name , order_now. company_email, order_now.company_bank_account, order_now.testing_brief, order_now.component_name, order_now.component_detail,  order_now.status,
                                    // from order_now,registration    where registration.user_id = order_now.user_id";
                                    
              $select = "select order_now.*  from order_now,registration
                                    where registration.user_id = order_now.user_id";

                                    $selectRun = mysqli_query($connect,$select);
                                    if(mysqli_num_rows($selectRun))
                                    {
                                        while($data=mysqli_fetch_array($selectRun))
                                    {
                                          ?>
                                        <tr>
                                        <td> <?php  echo $data['id']?></td>
                                        <td> <?php  echo $data['fisrt_name']?></td>
                                        <td> <?php  echo $data['last_name']?></td>
                                        <td> <?php  echo $data['phone']?></td>
                                        <td> <?php  echo $data['company_name']?></td>
                                        <td> <?php  echo $data['company_email']?></td>
                                        <td> <?php  echo $data['company_bank_account']?></td>
                                        <td> <?php  echo $data['testing_brief']?></td>
                                        <td> <?php  echo $data['component_name']?></td>
                                        <td> <?php  echo $data['component_detail']?></td>
                                        <td> <?php  echo $data['status']?></td>


                                    <td>
                                    <form method="POST">
                                      
                                   <input  type="hidden" name="user_id" value="<?php echo $data['user_id']?>">
                                  
                                   <input class="btn " type="submit" value="Approved" name="approved">
                                    
                                    <td >
                                   <input  class="btn "type="submit" value="Rejected" name="rejected">
                                    </td>
                               
                    </form>
                                    </td>
                                    </tr>
                                    <?php
                                    }}
                                    ?>
                                   

                            </table>
                            <?php
                            include('connection.php');
                            if(isset($_POST['approved']))
                            {
                                $id= $_POST['user_id'];
                                $status= $_POST['approved'];
                                $update= "update order_now set status= '$status' where user_id = '$id' ";
                                mysqli_query($connect,$update);
                                // header('location:orderapproval.php');
                            }

                            if(isset($_POST['rejected']))
                            {
                                $id= $_POST['user_id'];
                                $status= $_POST['rejected'];
                                $update= "update order_now set status= '$status' where user_id = '$id' ";
                                mysqli_query($connect,$update);
                                // header('location:orderapproval.php');
                            }



                            
        
                            ?>


                            </div>
            <!-- Table End -->
<br>
<br>
