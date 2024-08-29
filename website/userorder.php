
<div class="container-fluid">
        <div class="col-md-8 m-auto">
            <table class="table border-dark mt-3">
                <thead class="text-dark" id="product-table-border">
                    <tr>
                        <th class="fs-6">Order Id</th>
                        <th class="fs-6">Order Name</th>
                        <th class="fs-6">User Address</th>
                        <th class="fs-6">City</th>
                        <th class="fs-6">Credit_Card_Number</th>
            
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
                        <td>
            
                        
                        <?php

                }
            }
            ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>