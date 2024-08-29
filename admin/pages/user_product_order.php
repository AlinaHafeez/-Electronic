<?php include "header.php"?>
            
            <div class="container-fluid">
     
            <table class="table">
                <br>
                <br>
            <h3 class="text-center">User Product Orders<h3>
                <thead class="text-dark" id="product-table-border" >
                    <tr>
                        <th>Order Id</th>
                        <th>Order Name</th>
                        <th>User Address</th>
                        <th>City</th>
                        <th>Credit_Card_Number</th>
                    </tr>
                </thead>

                <tbody class="text-dark">
                    <?php include('connection.php');
            $query="select * from check_in";
            $result= mysqli_query($connect, $query);
            if(mysqli_num_rows($result))
            {
                while($data=mysqli_fetch_array($result))

                { ?>
                    <tr>
                        <td>
                            <?php echo $data['id']?>
                        </td>
                        <td>
                            <?php echo $data['name']?>
                        </td>
                        <td>
                            <?php echo $data['address']?>
                        </td>
                        <td>
                            <?php echo $data['city']?>
                        </td>
                        <td>
                            <?php echo $data['Credit_Card_Number']?>
                        </td>
                        
            
                        
                        <?php

                }
            }
            ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php include "footer.php"?>