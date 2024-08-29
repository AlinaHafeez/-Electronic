<?php
include('connection.php');
$id = $_GET['get_id'];
$delete_query="delete from product where id=$id";
$result=mysqli_query($connect,$delete_query);
if($result)
{
    header('location:addproduct.php');
}

?>