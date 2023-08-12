<?php
session_start();
require 'connectdb.php';
// session_start();
$acceptId = $_GET["acceptId"];
// session_start();
// echo $acceptId;



$qyert = "select * from plantsinfo where plantsid = $acceptId";

$dlvry = mysqli_query($connectiondb,$qyert);

$productdata = mysqli_fetch_assoc($dlvry);

// print_r($fetchdata["Id"]);
    $productid = $productdata['plantsid'];
    
    // session_start();
    if($dlvry){
        $_SESSION['updateid'] = $productid;

    }
    

?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-top: 100px;
    }

    h1 {
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Product Update form</h1>
    <form method="POST" action="producupdated.php">
        <label for=""><?php echo $productdata["plantsid"]?> Plant Id</label>
        <br><label for=""> Plant Name</label>
      <input type="text" name="plantname" placeholder="Username" required value="<?php echo $productdata["plantname"]?>"><br><br>
      <br><label for=""> Plant Price</label>
      <input type="number" name="plantprice" placeholder="Email" required value="<?php echo $productdata["price"]?>"><br><br>
      <br><label for=""> Plant Quantity</label>
      <input type="tel" name="plantquantity" placeholder="Phone Number" required value="<?php echo $productdata["quantity"]?>"><br><br>
      <br><label for=""> Plant Description</label>
      <input type="text" name="plantdescription" placeholder="Password" required value="<?php echo $productdata["description"]?>"><br><br>
      <!-- <br><label for=""> Plant Category</label>
      <select name="category" required>
      <?php
        $queryr= "select * from category";
        $categorydata = mysqli_query($connectiondb,$queryr);
        if($categorydata){
          while( $row = mysqli_fetch_assoc($categorydata)){
              echo '<option value='.$row["categoryid"].'>'.$row["categoryname"].'</option>';
          }
       }
        ?>
      </select><br><br>  -->
      <input type="submit" name="done" value="Done">
    </form>
  </div>
</body>
</html>
