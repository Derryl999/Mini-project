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
        
        <input type="number"name="prod_id" placeholder="Product Id" required ><br>


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
if(isset($_POST["submit"]))
{
  //customer
  //$cust_name=$_POST["cust_name"];
  $prod_id=$_POST["prod_id"];

  //$cust_email=$_POST["cust_email"];
  //$cust_add=$_POST["cust_add"];
 // $cust_phone=$_POST["cust_phone"];

  //product
  

  //orders

  //$ord_id=$_POST["ord_id"];
  //$date = date('m/d/Y');
  //cart

  //$query1="insert into customer values('$cust_name','$cust_id','$cust_email','$cust_add','$cust_phone')";
  $query3="call `del_prod`($prod_id)";
  //$query4="insert into cart values('$prod_id','$ord_id')";
  header("Location:adminview.html");
  //mysqli_query($conn,$query1);
 // mysqli_query($conn,$query2);
  mysqli_query($conn,$query3);
  //mysqli_query($conn,$query4);


 
 }
 ?>


