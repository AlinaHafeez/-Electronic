<?php
include('connection.php');

if (isset($_GET['update_id'])) {
    $update_id = $_GET['update_id'];

    $query = "SELECT * FROM product WHERE id = '$update_id'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
    } else {
        echo "Product not found";
        exit;
    }
} else {
    echo "Invalid request";
    exit;
}
?>
<style>
    form {
    width: 300px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

input[type="file"] {
    margin-bottom: 10px;
}

select {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

button {
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
    </style>
<br>
<!-- HTML form to update product -->
<form method="post" enctype="multipart/form-data">
    <label>Product Name:</label>
    <input type="text" name="n" value="<?php echo $data['name']; ?>">

    <label>Product Price:</label>
    <input type="number" name="pr" value="<?php echo $data['price']; ?>">

    <label>Product Image:</label>
    <input type="file" name="img">

    <label>Product Category:</label>
    <select name="s">
    <option value="Product" <?php if ($data['category'] == 'Product') echo 'selected'; ?>>Product</option>
    <option value="Switches" <?php if ($data['category'] == 'Switches') echo 'selected'; ?>>Switches</option>
    <option value="Resistors" <?php if ($data['category'] == 'Resistors') echo 'selected'; ?>>Resistors</option>
    <option value="Capacitors" <?php if ($data['category'] == 'Capacitors') echo 'selected'; ?>>Capacitors</option>
    <option value="Fuses" <?php if ($data['category'] == 'Fuses') echo 'selected'; ?>>Fuses</option>
    <option value="Sockets" <?php if ($data['category'] == 'Sockets') echo 'selected'; ?>>Sockets</option>
    <option value="Intergrated Circuits" <?php if ($data['category'] == 'Intergrated Circuits') echo 'selected'; ?>>Intergrated Circuits</option>
    <option value="Batteries" <?php if ($data['category'] == 'Batteries') echo 'selected'; ?>>Batteries</option>
    <option value="Programmable Device" <?php if ($data['category'] == 'Programmable Device') echo 'selected'; ?>>Programmable Device</option>
    <option value="Vacuum Tubes (valves)" <?php if ($data['category'] == 'Vacuum Tubes (valves)') echo 'selected'; ?>>Vacuum Tubes (valves)</option>
    <option value="Magnetic (inductive) devices" <?php if ($data['category'] == 'Magnetic (inductive) devices') echo 'selected'; ?>>Magnetic (inductive) devices</option>
    <option value="Power Sources" <?php if ($data['category'] == 'Power Sources') echo 'selected'; ?>>Power Sources</option>
    <option value="Memristor" <?php if ($data['category'] == 'Memristor') echo 'selected'; ?>>Memristor</option>
</select>
  

    <button type="submit" name="update">Update Product</button>
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['n'];
    $price = $_POST['pr'];
    $image = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
    $category = $_POST['s'];

    if ($name != "" && $price != "" && $image != "" && $category != "") {
        $query = "UPDATE product SET name = '$name', price = '$price', image = '$image', category = '$category' WHERE id = '$update_id'";
        mysqli_query($connect, $query);
        echo "Product updated successfully";
    } else {
        echo "Fields can't be empty";
    }
}
?>