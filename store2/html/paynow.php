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
        <input type="number"name="card_no" placeholder="Card Number" required ><br>
        
        <input type="number"name="cust_id" placeholder="Customer Id" required ><br>
        <!-- <input type="number"name="prod_id" placeholder="Product Id" required ><br> -->


        <!--product-->
        <input type="number"name="amt" placeholder="Amount" required ><br>
        


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
$prod_id=$_GET['prod_id'];

if(isset($_POST["submit"]))
{

  //customer
  //$cust_name=$_POST["cust_name"];
  $cust_id=$_POST["cust_id"];
  // $prod_id=$_POST["prod_id"];

  //$cust_email=$_POST["cust_email"];
  //$cust_add=$_POST["cust_add"];
 // $cust_phone=$_POST["cust_phone"];

  //product
  $card_no=$_POST["card_no"];
  $amt=$_POST["amt"];
  

  //orders

  //$ord_id=$_POST["ord_id"];
  //$date = date('m/d/Y');
  $date = date('Y-m-d H:i:s');
  //cart

  //$query1="insert into customer values('$cust_name','$cust_id','$cust_email','$cust_add','$cust_phone')";
  $query3="insert into payments(card_no,cust_id,amt,paid_on,prod_id) values($card_no,'$cust_id','$amt','$date','$prod_id')";
  //$query4="insert into cart values('$prod_id','$ord_id')";
  //header("Location:index1.php");
  //mysqli_query($conn,$query1);
 // mysqli_query($conn,$query2);
  mysqli_query($conn,$query3);
  //mysqli_query($conn,$query4);


 
 }
 ?>


