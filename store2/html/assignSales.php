<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/assignsales.css">

</head>
<body>
    <form class="assgsales" action="" method="POST">
        <!--customer-->
        
        <label for="fname">Salesman Id</label><br>
        <input type="number"name="salesid" placeholder="sales id"><br>
        <input type="submit" name="submit">
</form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","store");
//mysqli_select_db("store");
$ord_id=$_GET['ord_id'];

if(isset($_POST["submit"]))
{
  //customer
  $sales_id=$_POST["salesid"];
  //$cust_id=$_POST["custid"];

  $query1="update  orders set sales_id=$sales_id where order_id=$ord_id";
  mysqli_query($conn,$query1);
  header("Location:vieworders.php");

}
?>
