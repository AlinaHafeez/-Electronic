<?php
  
  include('connection.php');
  session_start();
  if(isset($_POST['AddCart']))
  {
    if(isset($_SESSION['cart']))
    {
      $checkproduct = array_column($_SESSION['cart'] ,'productName');
      if(in_array($_POST['p_name'],$checkproduct))
      {         
        echo "<script>alert('card already exists')
           window.location.href='products.php';</script>
        ";
      }
         //using count function // 0 + 1 = 1 +1 = 2 
      else
  
      {
        $count = count($_SESSION['cart']);  // session used for store data in server 
      $_SESSION['cart'][$count] = array('productName' =>$_POST['p_name'] , 'productPrice' => $_POST['p_price'] , 'Quantity'=> 1 );
      echo "<script>alert('item added')
      window.location.href='cart.php';</script>
   ";
    }
  }
  else{
    $_SESSION['cart'][0] = array('productName' =>$_POST['p_name'],'productPrice' => $_POST['p_price'] , 'Quantity'=> 1 );
    echo "<script>alert('item Added')
    window.location.href='cart.php';</script>
 ";
  }
  }
  if(isset($_POST['remove_item']))
  {
    $pname = $_POST['product_name'];   // initialize the variable name
    foreach($_SESSION['cart'] as $key => $value){
  
  if($value['productName'] == $pname ){
  
    unset($_SESSION['cart'][$key]);   // remove the selected item
    $_SESSION['cart'] = array_values($_SESSION['cart']);  //re-arrange the array
  
    echo "
    <script>
    alert('product removed!');
        window.location.href='cart.php';
        </script>
    ";
  }
  
    }
  
    
  }
  
  
  


?>
