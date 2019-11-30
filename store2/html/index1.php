<?php
$conn = mysqli_connect("localhost", "root", "", "store");

session_start();


$cid=$_GET['cid'];

echo $cid;

$_SESSION["cid"]=$cid;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link rel="stylesheet" href="../css/adminviewstyle.css">
    

</head>
<body>
  <a href="UserOrAdmin.html"><header class="logout">Logout</header></a>

<div class="custumview">
        <a href="custviewproduct.php?cid=<?php echo $cid ?>"><button class="btn">View Avialable Products</button></a>
        <!-- <a href="orderprod.php"><button class="btn">Order Product</button></a> -->
        <a href="cart.php?cid=<?php echo $cid ?>"><button class="btn">Cart</button></a>
      </div>

        

        
    
    <!--<form action="">
        <button>update salesman</button>
    </form> -->

    
</body>
</html>
