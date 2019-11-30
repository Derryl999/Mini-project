<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/materialize.css">

    
    <form action="" class="insprod" method="POST">
        <!-- <h5>Customer Id</h5>
        <input  style="text-align:center" type="text" placeholder="Customer Id" name="id" required class="active" ><br><br>
        <input type="submit" name="submit"><br><br><br><br><br><br> -->
</form>

<style>


table

{
    

border-style:solid;

border-width:1px;

border-color:black;

}

</style>
</head>
<body  >
    <div class="align">
    <!--<form action="">
        <button>update salesman</button>
    </form> -->








<?php
session_start();
$cid=$_GET['cid'];
//echo $cu_id;

//if(isset($_POST['submit'])){
$conn = mysqli_connect("localhost", "root", "", "store");
// Check connection
//$cust_id=$_POST["id"];
// $_SESSION['uid']=$id;
$sql = "SELECT * FROM product where prod_id in(select prod_id from orders where cust_id='$cid')";
$res=mysqli_query($conn,$sql);
echo "<table class='highlight' border='1'>
<tr>
<th>PRODUCT_ID</th>
<th>PRODUCT_NAME</th>
<th>PRODUCT_PRICE</th>
<th>WARRANTY</th>
</tr>";
while($r=mysqli_fetch_array($res))
 {
    
    ?>
<tr >
<td><?php echo $r['prod_id'] ?></td>
<td><?php echo $r['prod_name']?></td>
<td><?php echo $r['prod_price']?></td>
<td><?php echo $r['warr']?></td>
<td><a href="paynow.php?prod_id=<?php echo $r['prod_id'];?>" class="btn btn-info" role="button">Pay Now</a></td>

</tr>
<?php 
}
//}
?>
</div>
</body>
</html>