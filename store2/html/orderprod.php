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
    <form action="" class="insprod" method="POST">
        <!--customer-->
        
        <input type="number"name="cust_id" placeholder="customer id" required ><br>

        <!--product-->
        


        <!--orders-->


        <!--cart-->


        <!--payment-->
      <input type="submit" name="submit">

    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","store");
//mysqli_select_db("store");
session_start();
$pid=$_GET['prod_id'];

//echo $c_id;
if(isset($_POST["submit"]))
{
  //session_start();

  //customer
  //$cust_name=$_POST["cust_name"];
 $cust_id=$_POST["cust_id"];
 
  //$cust_email=$_POST["cust_email"];
  //$cust_add=$_POST["cust_add"];
 // $cust_phone=$_POST["cust_phone"];

  //product
  //$prod_id=$_POST["prod_id"];
  

  //orders

  //$ord_id=$_POST["ord_id"];
  //$date = date('m/d/Y');
  $date = date('Y-m-d H:i:s');
  //cart

  //$query1="insert into customer values('$cust_name','$cust_id','$cust_email','$cust_add','$cust_phone')";
  $query3="insert into orders(	ord_date,	cust_id	,	prod_id) values('$date','$cust_id','$pid')";
  //$query4="insert into cart values('$prod_id','$ord_id')";
 
  mysqli_query($conn,$query3);
  //mysqli_query($conn,$query4);

  //header("Location:index1.php");

 
 }
 ?>


