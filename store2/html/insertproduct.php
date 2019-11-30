<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/insertproduct.css">

</head>
<body>
    <form  class="insprod" action="" method="POST">
        <!--customer-->
        

        <!--product-->
        <label for="fname">Product Id</label><br>
        <input type="number"name="prod_id" placeholder="product id"><br>
        <label for="fname">Product Name</label><br>
        <input type="text"name="prod_name" placeholder="product name"><br>
        <label for="fname">Product Price</label><br>
        <input type="number"name="prod_price" placeholder="product price"><br>
        <label for="fname">Product Warranty</label><br>
        <input type="number"name="prod_warr" placeholder="product warranty"><br>


       


        <!--payment-->
      <input type="submit" name="submit">

    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","store");
//mysqli_select_db("store");
if(isset($_POST["submit"]))
{
  //customer
  //$cust_name=$_POST["cust_name"];
  //$cust_id=$_POST["cust_id"];
  //$cust_email=$_POST["cust_email"];
  //$cust_add=$_POST["cust_add"];
 // $cust_phone=$_POST["cust_phone"];

  //product
  $prod_id=$_POST["prod_id"];
  $prod_name=$_POST["prod_name"];
  $prod_price=$_POST["prod_price"];
  $prod_warr=$_POST["prod_warr"];

  //orders

//   $ord_id=$_POST["ord_id"];
//   $ord_date=$_POST["ord_date"];
// $sales_id=NULL;

  //cart

  //$query1="insert into customer values('$cust_name','$cust_id','$cust_email','$cust_add','$cust_phone')";
  $query2="insert into product values('$prod_id','$prod_name','$prod_price','$prod_warr')";
  // $query3="insert into orders(order_id,	ord_date,	cust_id	,	prod_id) values('$ord_id','$ord_date','$cust_id','$prod_id')";
  // $query4="insert into cart values('$prod_id','$ord_id')";
  
  //mysqli_query($conn,$query1);
  mysqli_query($conn,$query2);
  header("Location:adminview.html");
  


 
 }
 ?>


